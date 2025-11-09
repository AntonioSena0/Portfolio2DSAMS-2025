package com.example.appbasickotlin.viewmodel

import androidx.lifecycle.ViewModel
import androidx.lifecycle.viewModelScope
import com.example.appbasickotlin.data.repository.UserRepository
import kotlinx.coroutines.flow.MutableStateFlow
import kotlinx.coroutines.flow.StateFlow
import kotlinx.coroutines.flow.asStateFlow
import kotlinx.coroutines.launch

sealed class LoginState {
    object Idle : LoginState()
    object Loading : LoginState()
    data class Success(val username: String) : LoginState()
    data class Error(val message: String) : LoginState()
}

class LoginViewModel(private val userRepository: UserRepository) : ViewModel() {

    private val _loginState = MutableStateFlow<LoginState>(LoginState.Idle)
    val loginState: StateFlow<LoginState> = _loginState.asStateFlow()

    fun login(username: String, password: String) {
        viewModelScope.launch {
            _loginState.value = LoginState.Loading

            if (username.isBlank() || password.isBlank()) {
                _loginState.value = LoginState.Error("Preencha todos os campos")
                return@launch
            }

            val result = userRepository.loginUser(username, password)
            _loginState.value = if (result.isSuccess) {
                LoginState.Success(result.getOrNull()?.username ?: username)
            } else {
                LoginState.Error(result.exceptionOrNull()?.message ?: "Erro ao fazer login")
            }
        }
    }

    fun resetState() {
        _loginState.value = LoginState.Idle
    }
}