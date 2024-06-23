/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Other/File.java to edit this template
 */
package ucr.ac.cr.proyecto2.controller;

import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.ItemEvent;
import java.awt.event.MouseEvent;
import java.awt.event.MouseListener;
import java.util.logging.Level;
import java.util.logging.Logger;
import ucr.ac.cr.proyecto2.model.TbUsuarios;
import ucr.ac.cr.proyecto2.view.GUIModifyAccount;
import ucr.ac.cr.proyecto2.view.GUINewAccount;

/**
 *
 * @author Usuario
 */
public class ControllerModifyAccount implements ActionListener {

     GUIModifyAccount modifyAccount;
    TbUsuariosJpaController jpaUsuarios;
    TbUsuarios tbUsuarios;
    
    public ControllerModifyAccount(String usuario) {
        modifyAccount = new GUIModifyAccount();
        jpaUsuarios = new TbUsuariosJpaController();
        modifyAccount.setLocationRelativeTo(null);
        modifyAccount.setVisible(true);
        modifyAccount.listen(this);
        modifyAccount.setUsuario(usuario);

    }
    public void user(String usuario){
        
    }

    @Override
    public void actionPerformed(ActionEvent e) {
        switch (e.getActionCommand()) {
            case "Add":
                if (modifyAccount.getSelectrbUser()) {

                    if (validation()) {
                        try {
                            jpaUsuarios.add(new TbUsuarios(modifyAccount.getTxtUsername(),
                                    modifyAccount.getTxtPassword(),
                                    modifyAccount.getTxtName(), "User"));
                            modifyAccount.getMessage("Admin was added correctly");
                        } catch (Exception ex) {
                            Logger.getLogger(ControllerModifyAccount.class.getName()).log(Level.SEVERE, null, ex);
                        }
                    }

                } else if (modifyAccount.getSelectrbAdmin()) {

                    if (validation()) {

                        try {
                            jpaUsuarios.add(new TbUsuarios(modifyAccount.getTxtUsername(),
                                    modifyAccount.getTxtPassword(),
                                    modifyAccount.getTxtName(), "Admin"));
                            modifyAccount.getMessage("User was added correctly");
                        } catch (Exception ex) {
                            Logger.getLogger(ControllerModifyAccount.class.getName()).log(Level.SEVERE, null, ex);
                        }

                    }

                }

                break;
            case "Modify":
                if (modifyAccount.getSelectrbUser()) {

                    if (validation()) {
                        try {
                            jpaUsuarios.edit(new TbUsuarios(modifyAccount.getTxtUsername(),
                                    modifyAccount.getTxtPassword(),
                                    modifyAccount.getTxtName(), "User"));
                            modifyAccount.getMessage("The User was modified correctly");
                        } catch (Exception ex) {
                            Logger.getLogger(ControllerModifyAccount.class.getName()).log(Level.SEVERE, null, ex);
                        }
                    }

                } else if (modifyAccount.getSelectrbAdmin()) {

                    if (validation()) {

                        try {
                            jpaUsuarios.edit(new TbUsuarios(modifyAccount.getTxtUsername(),
                                    modifyAccount.getTxtPassword(),
                                    modifyAccount.getTxtName(), "Admin"));
                            modifyAccount.getMessage("The Admin was modified correctly");
                        } catch (Exception ex) {
                            Logger.getLogger(ControllerModifyAccount.class.getName()).log(Level.SEVERE, null, ex);
                        }

                    }

                }

                break;
            case "Delete":

                if (!modifyAccount.getTxtUsername().isEmpty()) {
                    try {
                        jpaUsuarios.delete(modifyAccount.getTxtUsername());
                        modifyAccount.getMessage("The User was delete correctly");
                    } catch (Exception ex) {
                        Logger.getLogger(ControllerModifyAccount.class.getName()).log(Level.SEVERE, null, ex);
                    }
                } else {
                    modifyAccount.getMessage("No username has been entered");
                }

                break;
            case "Search":
                
           
                    
                        try {
                if (jpaUsuarios.search(modifyAccount.getTxtUsername()) != null) {
                    modifyAccount.setData(jpaUsuarios.search(modifyAccount.getTxtUsername()));
                } else {
                    modifyAccount.getMessage("No user was found with the userName");
                }

            } catch (Exception ex) {
                Logger.getLogger(ControllerModifyAccount.class.getName()).log(Level.SEVERE, null, ex);
            }

            break;
        }
    }

    public boolean validation() {
        if (modifyAccount.txtIsEmptyUser()) {
            modifyAccount.getMessage("You must fill in all the spaces");
            return false;
        }
        return true;
    }//Fin del metodo

    

    
}
