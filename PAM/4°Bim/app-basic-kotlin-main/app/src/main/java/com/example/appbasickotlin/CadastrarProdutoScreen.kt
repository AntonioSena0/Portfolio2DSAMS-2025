package com.example.appbasickotlin

import androidx.compose.foundation.Image
import androidx.compose.foundation.background
import androidx.compose.foundation.layout.*
import androidx.compose.foundation.shape.RoundedCornerShape
import androidx.compose.foundation.text.KeyboardOptions
import androidx.compose.material.icons.Icons
import androidx.compose.material.icons.filled.Info
import androidx.compose.material.icons.filled.List
import androidx.compose.material.icons.filled.ShoppingCart
import androidx.compose.material3.*
import androidx.compose.runtime.*
import androidx.compose.ui.Alignment
import androidx.compose.ui.Modifier
import androidx.compose.ui.graphics.Brush
import androidx.compose.ui.platform.LocalContext
import androidx.compose.ui.res.painterResource
import androidx.compose.ui.text.font.FontWeight
import androidx.compose.ui.text.input.KeyboardType
import androidx.compose.ui.unit.dp
import androidx.compose.ui.unit.sp
import androidx.lifecycle.viewmodel.compose.viewModel
import com.example.appbasickotlin.viewmodel.ProductOperationState
import com.example.appbasickotlin.viewmodel.ProductViewModel
import com.example.appbasickotlin.viewmodel.ViewModelFactory

@Composable
fun CadastrarProdutoScreen(onRegisterComplete: () -> Unit) {
    val context = LocalContext.current
    val viewModel: ProductViewModel = viewModel(factory = ViewModelFactory(context))
    val operationState by viewModel.operationState.collectAsState()

    var produto by remember { mutableStateOf("") }
    var quantidade by remember { mutableStateOf("") }
    var descricao by remember { mutableStateOf("") }
    var showError by remember { mutableStateOf(false) }
    var errorMessage by remember { mutableStateOf("") }
    var showSuccess by remember { mutableStateOf(false) }

        LaunchedEffect(operationState) {
            when (operationState) {
                is ProductOperationState.Success -> {
                    showSuccess = true
                    viewModel.resetOperationState()
                }
                is ProductOperationState.Error -> {
                    errorMessage = (operationState as ProductOperationState.Error).message
                    showError = true
                    viewModel.resetOperationState()
                }
                else -> {}
            }
        }

        if (showSuccess) {
            AlertDialog(
                onDismissRequest = { },
                title = { Text("Sucesso!") },
                    text = { Text("Produto cadastrado com sucesso!") },
                        confirmButton = {
                            TextButton(onClick = {
                                showSuccess = false
                                produto = ""
                                quantidade = ""
                                descricao = ""
                                onRegisterComplete()
                            }) {
                                Text("OK")
                            }
                        }
                        )
                    }

    val gradient = Brush.verticalGradient(
        colors = listOf(
            MaterialTheme.colorScheme.primary,
            MaterialTheme.colorScheme.primaryContainer
        )
    )

    Box(
        modifier = Modifier
            .fillMaxSize()
            .background(brush = gradient),
        contentAlignment = Alignment.Center
    ) {
        Card(
            modifier = Modifier
                .padding(16.dp)
                .fillMaxWidth(0.9f)
                .wrapContentHeight(),
            shape = RoundedCornerShape(24.dp),
            elevation = CardDefaults.cardElevation(12.dp)
        ) {
            Column(
                horizontalAlignment = Alignment.CenterHorizontally,
                modifier = Modifier.padding(24.dp)
            ) {
                Image(
                    painter = painterResource(id = R.drawable.ic_logo),
                    contentDescription = "Logo",
                    modifier = Modifier
                        .height(80.dp)
                        .padding(bottom = 16.dp)
                )

                Text(
                    text = "Cadastrar Produto",
                    fontSize = 24.sp,
                    fontWeight = FontWeight.Bold,
                    color = MaterialTheme.colorScheme.primary
                )

                Spacer(modifier = Modifier.height(16.dp))

                OutlinedTextField(
                    value = produto,
                    onValueChange = { produto = it },
                    label = { Text("Produto") },
                    leadingIcon = {
                        Icon(Icons.Filled.ShoppingCart, contentDescription = null)
                    },
                    modifier = Modifier.fillMaxWidth()
                )

                Spacer(modifier = Modifier.height(12.dp))

                OutlinedTextField(
                    value = quantidade,
                    onValueChange = { quantidade = it },
                    label = { Text("Quantidade") },
                    keyboardOptions = KeyboardOptions(keyboardType = KeyboardType.Number),
                    leadingIcon = {
                        Icon(Icons.Filled.List, contentDescription = null)
                    },
                    modifier = Modifier.fillMaxWidth()
                )

                Spacer(modifier = Modifier.height(12.dp))

                OutlinedTextField(
                    value = descricao,
                    onValueChange = { descricao = it },
                    label = { Text("Descrição") },
                    leadingIcon = {
                        Icon(Icons.Filled.Info, contentDescription = null)
                    },
                    modifier = Modifier
                        .fillMaxWidth()
                        .height(100.dp),
                    maxLines = 4
                )

                Spacer(modifier = Modifier.height(20.dp))

                if (showError) {
                    Text(
                        text = errorMessage,
                        color = MaterialTheme.colorScheme.error,
                        fontSize = 14.sp,
                        modifier = Modifier.padding(bottom = 8.dp)
                    )
                }

                Button(
                    onClick = {
                        showError = false
                        viewModel.insertProduct(produto, quantidade, descricao)
                    },
                    modifier = Modifier
                        .fillMaxWidth()
                        .height(48.dp),
                    shape = RoundedCornerShape(12.dp),
                    enabled = operationState !is ProductOperationState.Loading
                ) {
                    if (operationState is ProductOperationState.Loading) {
                        CircularProgressIndicator(
                            modifier = Modifier.size(24.dp),
                            color = MaterialTheme.colorScheme.onPrimary
                        )
                    } else {
                        Text("Cadastrar", fontSize = 16.sp)
                    }
                }
            }
        }
    }
}
