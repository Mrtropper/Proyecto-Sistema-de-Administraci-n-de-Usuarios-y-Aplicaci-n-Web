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
import ucr.ac.cr.proyecto2.view.GUIModifyAccount;
import ucr.ac.cr.proyecto2.view.GUINewAccount;

/**
 *
 * @author Usuario
 */
public class ControllerAdminUser implements ActionListener, MouseListener {

    TbUsuariosJpaController jpaUsuarios;
    GUIAdminUser guiAdminUser;
    ControllerModifyAccount modifyAccount;
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
            case"Modify":
                modifyAccount  = new ControllerModifyAccount();
                modifyAccount.user(guiAdminUser.getSearch());
                guiAdminUser.setDataTable(jpaUsuarios.getMatrix(), TbUsuarios.ETIQUETA_USUARIOS);
            break;
            
            
        }
    }

    @Override
    public void mouseClicked(MouseEvent e) {
        guiAdminUser.setCode(guiAdminUser.getDataRow()[0]);
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
