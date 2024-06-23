/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/File.java to edit this template
 */
package ucr.ac.cr.proyecto2.controller;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import ucr.ac.cr.proyecto2.view.GUIAdminUser;
import ucr.ac.cr.proyecto2.view.GUILogin;
import ucr.ac.cr.proyecto2.view.GUINewAccount;

/**
 *
 * @author Usuario
 */
public class ControllerLogin implements ActionListener {

    GUILogin login;
    ControllerNewAccount newAccount;
    TbUsuariosJpaController jpaUsuarios;
    ControllerAdminUser adminUser;
    
    
    public ControllerLogin(){
        login = new GUILogin();
        jpaUsuarios = new TbUsuariosJpaController();
        login.listen(this);
        login.setLocationRelativeTo(null);
        login.setVisible(true);
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        switch(e.getActionCommand()){
            case "Login":
                if(validation()){
                    if(jpaUsuarios.search(login.getTxtUserName()) !=null){
                        if(jpaUsuarios.search(login.getTxtUserName()).getPassword().equals(login.getTxtPassword())){
                            if(jpaUsuarios.search(login.getTxtUserName()).getProfile().equals("Admin")){
                                adminUser = new ControllerAdminUser();
                                login.dispose();
                            } else{
                                login.getMessage("You are a user, go to the page");
                                login.dispose();
                            }
                        } else{
                            login.getMessage("The password is incorrect");
                        }
                    } else {
                        login.getMessage("The user entered is incorrect");
                    }
                }
                
                break;
            case "New account":
                newAccount = new ControllerNewAccount();
                login.dispose();
                break;
        }
    }
    
    public boolean validation(){
        if(login.txtIsEmptyUser()){
            login.getMessage("You must fill in all the spaces");
            return false;
        }
        return true;
    }//Fin del metodo
}
