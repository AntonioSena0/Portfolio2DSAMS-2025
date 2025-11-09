package com.example.appbasickotlin.data.repository

import com.example.appbasickotlin.data.dao.ProductDao
import com.example.appbasickotlin.data.entity.ProductEntity
import kotlinx.coroutines.flow.Flow

class ProductRepository(private val productDao: ProductDao) {

    fun getAllProducts(): Flow<List<ProductEntity>> = productDao.getAllProducts()

    suspend fun insertProduct(nome: String, quantidade: Int, descricao: String): Result<Long> {
        return try {
            if (nome.isBlank()) {
                return Result.failure(Exception("Nome do produto não pode estar vazio"))
            }
            if (quantidade < 0) {
                return Result.failure(Exception("Quantidade deve ser maior ou igual a zero"))
            }

            val product = ProductEntity(
                nome = nome,
                quantidade = quantidade,
                descricao = descricao
            )
            val id = productDao.insert(product)
            Result.success(id)
        } catch (e: Exception) {
            Result.failure(e)
        }
    }

    suspend fun updateProduct(product: ProductEntity): Result<Unit> {
        return try {
            if (product.nome.isBlank()) {
                return Result.failure(Exception("Nome do produto não pode estar vazio"))
            }
            if (product.quantidade < 0) {
                return Result.failure(Exception("Quantidade deve ser maior ou igual a zero"))
            }

            productDao.update(product)
            Result.success(Unit)
        } catch (e: Exception) {
            Result.failure(e)
        }
    }

    suspend fun deleteProduct(product: ProductEntity): Result<Unit> {
        return try {
            productDao.delete(product)
            Result.success(Unit)
        } catch (e: Exception) {
            Result.failure(e)
        }
    }

    suspend fun getProductById(id: Int): ProductEntity? {
        return productDao.getProductById(id)
    }

    suspend fun deleteAllProducts(): Result<Unit> {
        return try {
            productDao.deleteAll()
            Result.success(Unit)
        } catch (e: Exception) {
            Result.failure(e)
        }
    }
}