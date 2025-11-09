package com.example.appbasickotlin.viewmodel

import android.content.Context
import androidx.lifecycle.ViewModel
import androidx.lifecycle.ViewModelProvider
import com.example.appbasickotlin.data.database.AppDatabase
import com.example.appbasickotlin.data.repository.ProductRepository
import com.example.appbasickotlin.data.repository.UserRepository

class ViewModelFactory(private val context: Context) : ViewModelProvider.Factory {
    override fun <T : ViewModel> create(modelClass: Class<T>): T {
        val database = AppDatabase.getDatabase(context)

        return when {
            modelClass.isAssignableFrom(LoginViewModel::class.java) -> {
                val userRepository = UserRepository(database.userDao())
                LoginViewModel(userRepository) as T
            }
            modelClass.isAssignableFrom(RegisterViewModel::class.java) -> {
                val userRepository = UserRepository(database.userDao())
                RegisterViewModel(userRepository) as T
            }
            modelClass.isAssignableFrom(ProductViewModel::class.java) -> {
                val productRepository = ProductRepository(database.productDao())
                ProductViewModel(productRepository) as T
            }
            else -> throw IllegalArgumentException("Unknown ViewModel class")
        }
    }
}