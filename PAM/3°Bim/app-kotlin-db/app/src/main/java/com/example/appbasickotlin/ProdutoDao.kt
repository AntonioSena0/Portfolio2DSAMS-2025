package com.example.appbasickotlin.data

import androidx.room.Dao
import androidx.room.Insert
import androidx.room.Query
import androidx.room.Update
import androidx.room.Delete
import kotlinx.coroutines.flow.Flow

@Dao
interface ProdutoDao {
    @Insert
    suspend fun insert(produto: Produto)

    @Update
    suspend fun update(produto: Produto)

    @Delete
    suspend fun delete(produto: Produto)

    @Query("SELECT * FROM produtos WHERE userId = :userId ORDER BY nome")
    fun getProdutosByUser(userId: String): Flow<List<Produto>>

    @Query("SELECT * FROM produtos WHERE id = :id")
    suspend fun getProdutoById(id: String): Produto?
}