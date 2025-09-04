package com.example.appbasickotlin.data

import androidx.room.Entity
import androidx.room.PrimaryKey
import java.util.UUID

@Entity(tableName = "produtos")
data class Produto(
    @PrimaryKey val id: String = UUID.randomUUID().toString(),
    val nome: String,
    val quantidade: Int,
    val descricao: String,
    val userId: String
)