package com.example.appbasickotlin.viewmodel

import androidx.lifecycle.ViewModel
import androidx.lifecycle.viewModelScope
import com.example.appbasickotlin.data.entity.ProductEntity
import com.example.appbasickotlin.data.repository.ProductRepository
import kotlinx.coroutines.flow.MutableStateFlow
import kotlinx.coroutines.flow.SharingStarted
import kotlinx.coroutines.flow.StateFlow
import kotlinx.coroutines.flow.asStateFlow
import kotlinx.coroutines.flow.stateIn
import kotlinx.coroutines.launch

sealed class ProductOperationState {
    object Idle : ProductOperationState()
    object Loading : ProductOperationState()
    object Success : ProductOperationState()
    data class Error(val message: String) : ProductOperationState()
}

class ProductViewModel(private val productRepository: ProductRepository) : ViewModel() {

    val products: StateFlow<List<ProductEntity>> = productRepository.getAllProducts()
        .stateIn(
            scope = viewModelScope,
            started = SharingStarted.WhileSubscribed(5000),
            initialValue = emptyList()
        )

    private val _operationState = MutableStateFlow<ProductOperationState>(ProductOperationState.Idle)
    val operationState: StateFlow<ProductOperationState> = _operationState.asStateFlow()

    fun insertProduct(nome: String, quantidade: String, descricao: String) {
        viewModelScope.launch {
            _operationState.value = ProductOperationState.Loading

            val qtd = quantidade.toIntOrNull() ?: 0
            val result = productRepository.insertProduct(nome, qtd, descricao)

            _operationState.value = if (result.isSuccess) {
                ProductOperationState.Success
            } else {
                ProductOperationState.Error(result.exceptionOrNull()?.message ?: "Erro ao cadastrar produto")
            }
        }
    }

    fun updateProduct(product: ProductEntity) {
        viewModelScope.launch {
            _operationState.value = ProductOperationState.Loading

            val result = productRepository.updateProduct(product)

            _operationState.value = if (result.isSuccess) {
                ProductOperationState.Success
            } else {
                ProductOperationState.Error(result.exceptionOrNull()?.message ?: "Erro ao atualizar produto")
            }
        }
    }

    fun deleteProduct(product: ProductEntity) {
        viewModelScope.launch {
            _operationState.value = ProductOperationState.Loading

            val result = productRepository.deleteProduct(product)

            _operationState.value = if (result.isSuccess) {
                ProductOperationState.Success
            } else {
                ProductOperationState.Error(result.exceptionOrNull()?.message ?: "Erro ao deletar produto")
            }
        }
    }

    fun resetOperationState() {
        _operationState.value = ProductOperationState.Idle
    }
}