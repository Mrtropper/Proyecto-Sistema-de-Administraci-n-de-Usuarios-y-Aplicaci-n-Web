/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/File.java to edit this template
 */
package ucr.ac.cr.proyecto2.controller;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.MouseEvent;
import java.awt.event.MouseListener;
import ucr.ac.cr.proyecto2.model.TbUsuarios;
import ucr.ac.cr.proyecto2.view.GUIAdminUser;
import ucr.ac.cr.proyecto2.view.GUINewAccount;

/**
 *
 * @author Usuario
 */
public class ControllerAdminUser implements ActionListener, MouseListener {

    TbUsuariosJpaController jpaUsuarios;
    GUIAdminUser guiAdminUser;
    GUINewAccount newAccount;
    public ControllerAdminUser(){
        jpaUsuarios = new TbUsuariosJpaController();
        guiAdminUser = new GUIAdminUser();
        guiAdminUser.setDataTable(jpaUsuarios.getMatrix(), TbUsuarios.ETIQUETA_USUARIOS);
        guiAdminUser.listenButtons(this);
        guiAdminUser.listenMouse(this);
        guiAdminUser.setLocationRelativeTo(null);
        guiAdminUser.setVisible(true);
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        switch(e.getActionCommand()){
            case"Add":
                newAccount  = new GUINewAccount();
                guiAdminUser.setDataTable(jpaUsuarios.getMatrix(), TbUsuarios.ETIQUETA_USUARIOS);// EJRM
            break;
            
            case"Modify":
                if(guiSettings.getSelectRow() != -1){
                    
                    userArray.delete(guiSettings.getSearch());// EJRM
                    userArray.searchAdmins(); 
                    guiSettings.setDataTable(userArray.getMatrix(), User.TITTLE_USER);
                    guiSettings.unSelectRow();
                    
                }else{
                    guiSettings.getMessage("Error, you must select a user to delete");
                }
            break;
        }
    }

    @Override
    public void mouseClicked(MouseEvent e) {
    }

    @Override
    public void mousePressed(MouseEvent e) {
    }

    @Override
    public void mouseReleased(MouseEvent e) {
    }

    @Override
    public void mouseEntered(MouseEvent e) {
    }

    @Override
    public void mouseExited(MouseEvent e) {
    }
    
}
