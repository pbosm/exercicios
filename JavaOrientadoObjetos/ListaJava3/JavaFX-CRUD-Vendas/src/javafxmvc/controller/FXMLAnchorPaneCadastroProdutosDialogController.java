/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package javafxmvc.controller;

import java.sql.Connection;
import java.net.URL;
import java.util.List;
import java.util.ResourceBundle;
import javafx.collections.FXCollections;
import javafx.collections.ObservableList;
import javafx.fxml.FXML;
import javafx.fxml.Initializable;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.ComboBox;
import javafx.scene.control.TextField;
import javafx.stage.Stage;
import javafxmvc.model.dao.CategoriaDAO;
import javafxmvc.model.database.Database;
import javafxmvc.model.database.DatabaseFactory;
import javafxmvc.model.domain.Categoria;
import javafxmvc.model.domain.Produto;

/**
 * FXML Controller class
 *
 * @author Pablo
 */
public class FXMLAnchorPaneCadastroProdutosDialogController implements Initializable {

    @FXML
    private TextField textFieldCadastroProdutosNome;
    @FXML
    private TextField textFieldCadastroProdutosPreco;       
    @FXML
    private TextField textFieldCadastroProdutosQuantidade;       
    @FXML
    private ComboBox comboBoxCadastroProdutosCategorias;
    @FXML
    private Button buttonConfirmar;
    @FXML
    private Button buttonCancelar;
    
    private List<Categoria> listCategorias;
    private ObservableList<Categoria> observableListCategorias;
    
    private final Database database = DatabaseFactory.getDatabase("postgresql");
    private final Connection connection = database.conectar();
    private final CategoriaDAO categoriaDAO = new CategoriaDAO();
    
    private Stage dialogStage;
    private boolean buttonConfirmarClicked = false;
    private Produto produto;
        
    @Override
    public void initialize(URL url, ResourceBundle rb) {
        categoriaDAO.setConnection(connection);
        carregarComboBoxCategorias();
    }   
    
    public Stage getDialogStage() {
        return dialogStage;
    }

    public void setDialogStage(Stage dialogStage) {
        this.dialogStage = dialogStage;
    }

    public boolean isButtonConfirmarClicked() {
        return buttonConfirmarClicked;
    }

    public void setButtonConfirmarClicked(boolean buttonConfirmarClicked) {
        this.buttonConfirmarClicked = buttonConfirmarClicked;
    }

    public Produto getProduto() {
        return produto;
    }

    public void setProduto(Produto produto) {
        this.produto = produto;
        this.textFieldCadastroProdutosNome.setText(produto.getNome());
        this.textFieldCadastroProdutosPreco.setText(Double.toString(produto.getPreco()));
        this.textFieldCadastroProdutosQuantidade.setText(Integer.toString(produto.getQuantidade()));
        this.comboBoxCadastroProdutosCategorias.getSelectionModel().select(produto.getCategoria());
    }
    
//        public void setProduto(Produto produto) {
//        this.produto = produto;
//        this.textFieldCadastroProdutosNome.setText(produto.getNome());
//        this.textFieldCadastroProdutosPreco.setText(String.format("%.2f", produto.getPreco()));
//        this.textFieldCadastroProdutosQuantidade.setText(String.format("", produto.getQuantidade()));
//        this.comboBoxCadastroProdutosCategorias.getSelectionModel().select(produto.getCategoria());
//    }
    
    public void carregarComboBoxCategorias() {
        listCategorias = categoriaDAO.listar();
        observableListCategorias = FXCollections.observableArrayList(listCategorias);
        comboBoxCadastroProdutosCategorias.setItems(observableListCategorias);
    }
  

    @FXML
    public void handleButtonConfirmar() {
        if (validarEntradaDeDados()) {
            produto.setNome(textFieldCadastroProdutosNome.getText());
            produto.setQuantidade(Integer.parseInt(textFieldCadastroProdutosQuantidade.getText()));
            produto.setPreco(Double.parseDouble(textFieldCadastroProdutosPreco.getText()));
            produto.setCategoria((Categoria) comboBoxCadastroProdutosCategorias.getSelectionModel().getSelectedItem());
            buttonConfirmarClicked = true;
            dialogStage.close();
        }
    }
    
    @FXML
    public void handleButtonCancelar() {
        getDialogStage().close();
    }

    //Validar entrada de dados para o cadastro
    private boolean validarEntradaDeDados() {
        String errorMessage = "";

        if (textFieldCadastroProdutosNome.getText() == null || textFieldCadastroProdutosNome.getText().length() == 0) {
            errorMessage += "Nome inválido!\n";
        }
        if (textFieldCadastroProdutosPreco.getText() == null || textFieldCadastroProdutosPreco.getText().length() == 0) {
            errorMessage += "Preço inválido!\n";
        }
        if (textFieldCadastroProdutosQuantidade.getText() == null || textFieldCadastroProdutosQuantidade.getText().length() == 0) {
            errorMessage += "Quantidade inválido!\n";
        }
        if (comboBoxCadastroProdutosCategorias.getSelectionModel().getSelectedItem() == null) {
            errorMessage += "Escolha a categoria!\n";
        }

        if (errorMessage.length() == 0) {
            return true;
        } else {
            // Mostrando a mensagem de erro
            Alert alert = new Alert(Alert.AlertType.ERROR);
            alert.setTitle("Erro no cadastro");
            alert.setHeaderText("Campos inválidos, por favor, corrija...");
            alert.setContentText(errorMessage);
            alert.show();
            return false;
        }
    }
}
