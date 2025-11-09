package com.example.appbasickotlin.data.repository

import com.example.appbasickotlin.data.dao.UserDao
import com.example.appbasickotlin.data.entity.UserEntity
import kotlinx.coroutines.flow.Flow

class UserRepository(private val userDao: UserDao) {

    suspend fun registerUser(username: String, email: String, password: String): Result<Long> {
        return try {
            val existingUser = userDao.getUserByUsername(username)
            if (existingUser != null) {
                return Result.failure(Exception("Usuário já existe"))
            }

            val existingEmail = userDao.getUserByEmail(email)
            if (existingEmail != null) {
                return Result.failure(Exception("Email já cadastrado"))
            }

            val user = UserEntity(
                username = username,
                email = email,
                password = password
            )
            val id = userDao.insert(user)
            Result.success(id)
        } catch (e: Exception) {
            Result.failure(e)
        }
    }

    suspend fun loginUser(username: String, password: String): Result<UserEntity> {
        return try {
            val user = userDao.login(username, password)
            if (user != null) {
                Result.success(user)
            } else {
                Result.failure(Exception("Usuário ou senha inválidos"))
            }
        } catch (e: Exception) {
            Result.failure(e)
        }
    }

    fun getAllUsers(): Flow<List<UserEntity>> = userDao.getAllUsers()
}