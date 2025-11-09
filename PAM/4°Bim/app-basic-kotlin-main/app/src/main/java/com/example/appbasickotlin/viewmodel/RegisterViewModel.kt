package com.example.appbasickotlin.viewmodel

import androidx.lifecycle.ViewModel
import androidx.lifecycle.viewModelScope
import com.example.appbasickotlin.data.repository.UserRepository
import kotlinx.coroutines.flow.MutableStateFlow
import kotlinx.coroutines.flow.StateFlow
import kotlinx.coroutines.flow.asStateFlow
import kotlinx.coroutines.launch

sealed class RegisterState {
    object Idle : RegisterState()
    object Loading : RegisterState()
    object Success : RegisterState()
    data class Error(val message: String) : RegisterState()
}

class RegisterViewModel(private val userRepository: UserRepository) : ViewModel() {

    private val _registerState = MutableStateFlow<RegisterState>(RegisterState.Idle)
    val registerState: StateFlow<RegisterState> = _registerState.asStateFlow()

    fun register(username: String, email: String, password: String, confirmPassword: String) {
        viewModelScope.launch {
            _registerState.value = RegisterState.Loading

            // Validações
            if (username.isBlank() || email.isBlank() || password.isBlank() || confirmPassword.isBlank()) {
                _registerState.value = RegisterState.Error("Preencha todos os campos")
                return@launch
            }

            if (!email.contains("@")) {
            _registerState.value = RegisterState.Error("Email inválido")
            return@launch
        }

        if (password != confirmPassword) {
            _registerState.value = RegisterState.Error("As senhas não coincidem")
            return@launch
        }

        if (password.length < 4) {
            _registerState.value = RegisterState.Error("A senha deve ter pelo menos 4 caracteres")
            return@launch
        }

        val result = userRepository.registerUser(username, email, password)
        _registerState.value = if (result.isSuccess) {
            RegisterState.Success
        } else {
            RegisterState.Error(result.exceptionOrNull()?.message ?: "Erro ao cadastrar")
        }
    }
}

fun resetState() {
    _registerState.value = RegisterState.Idle
}
}