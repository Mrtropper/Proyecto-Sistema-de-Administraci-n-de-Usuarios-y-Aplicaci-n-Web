/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/GUIForms/JFrame.java to edit this template
 */
package ucr.ac.cr.proyecto2.view;

import java.awt.event.ActionListener;
import javax.swing.ButtonGroup;
import javax.swing.JOptionPane;
import ucr.ac.cr.proyecto2.controller.ControllerNewAccount;

/**
 *
 * @author User
 */
public class GUINewAccount extends javax.swing.JFrame {

    /**
     * Creates new form GUINewAccount
     */
    public GUINewAccount() {
        initComponents();
        ButtonGroup buttonGroup = new ButtonGroup();
        buttonGroup.add(rbtnAdmin);
        buttonGroup.add(rbtnUser);
        this.rbtnUser.setSelected(true);
        TextPrompt placeHolderUsername = new TextPrompt("Username", txtUsernameNA);
        TextPrompt placeHolderPassword = new TextPrompt("Password", txtPasswordNA);
        TextPrompt placeHolderName = new TextPrompt("Name", txtNameNA);
        TextPrompt placeHolderCode = new TextPrompt("Code", txtSPCode);
    }
    
   
    
    public void listen(ControllerNewAccount controller)
    {
        this.btnCA.addActionListener(controller);
        this.rbtnAdmin.addItemListener(controller);
        this.rbtnUser.addItemListener(controller);
    }
     
    
    public boolean getSelectrbUser(){
        return this.rbtnUser.isSelected();
    }
     
    public boolean getSelectrbAdmin(){
        return this.rbtnAdmin.isSelected();
    }
     
    public String getRbUser(){
      return this.rbtnUser.toString();
    }
     
    public String getRbAdmin(){
       return this.rbtnAdmin.toString();
    }
     
    public void setTxtCodeEnabled(boolean control){
        this.txtSPCode.setEnabled(control);
    }//fin del metodo
    
    public boolean txtIsEmptyUser(){
        if(this.txtPasswordNA.getText().isBlank() || this.txtUsernameNA.getText().isBlank()){
            return true;
        }
        return false;
    }
    
    public boolean txtSpCodeIsEmpty(){
        if(this.txtSPCode.getText().isBlank()){
            return true;
        }
        return false;
    }

    public void getMessage(String message){
        JOptionPane.showMessageDialog(null,message);
    }
    
    public String getTxtUsername(){
        return this.txtUsernameNA.getText();
    }
    public String getTxtName(){
        return this.txtNameNA.getText();
    }
    
    public String getTxtPassword(){
        return this.txtPasswordNA.getText();
    }
    
    public String getTxtSpCode(){
        return this.txtSPCode.getText();
    }
    
    
    
    /**
     * This method is called from within the constructor to initialize the form.
     * WARNING: Do NOT modify this code. The content of this method is always
     * regenerated by the Form Editor.
     */
    @SuppressWarnings("unchecked")
    // <editor-fold defaultstate="collapsed" desc="Generated Code">//GEN-BEGIN:initComponents
    private void initComponents() {

        jPanel1 = new javax.swing.JPanel();
        jLabel1 = new javax.swing.JLabel();
        rbtnUser = new javax.swing.JRadioButton();
        rbtnAdmin = new javax.swing.JRadioButton();
        jLabel5 = new javax.swing.JLabel();
        jLabel6 = new javax.swing.JLabel();
        jPanel3 = new javax.swing.JPanel();
        jPanel4 = new javax.swing.JPanel();
        btnCA = new javax.swing.JButton();
        txtSPCode = new javax.swing.JTextField();
        jLabel2 = new javax.swing.JLabel();
        txtUsernameNA = new javax.swing.JTextField();
        txtPasswordNA = new javax.swing.JTextField();
        txtNameNA = new javax.swing.JTextField();
        jPanel2 = new javax.swing.JPanel();

        setDefaultCloseOperation(javax.swing.WindowConstants.DISPOSE_ON_CLOSE);
        setTitle("Create a new account");
        getContentPane().setLayout(new org.netbeans.lib.awtextra.AbsoluteLayout());

        jPanel1.setBackground(new java.awt.Color(255, 255, 255));
        jPanel1.setLayout(new org.netbeans.lib.awtextra.AbsoluteLayout());

        jLabel1.setFont(new java.awt.Font("Corbel", 1, 16)); // NOI18N
        jLabel1.setForeground(new java.awt.Color(0, 153, 153));
        jLabel1.setText(" Account type");
        jPanel1.add(jLabel1, new org.netbeans.lib.awtextra.AbsoluteConstraints(100, 150, 100, -1));

        rbtnUser.setBackground(new java.awt.Color(255, 255, 255));
        rbtnUser.setFont(new java.awt.Font("Corbel", 1, 14)); // NOI18N
        rbtnUser.setForeground(new java.awt.Color(0, 153, 153));
        rbtnUser.setText("User");
        jPanel1.add(rbtnUser, new org.netbeans.lib.awtextra.AbsoluteConstraints(70, 180, -1, -1));

        rbtnAdmin.setBackground(new java.awt.Color(255, 255, 255));
        rbtnAdmin.setFont(new java.awt.Font("Corbel", 1, 14)); // NOI18N
        rbtnAdmin.setForeground(new java.awt.Color(0, 153, 153));
        rbtnAdmin.setText("Admin");
        jPanel1.add(rbtnAdmin, new org.netbeans.lib.awtextra.AbsoluteConstraints(150, 180, -1, -1));

        jLabel5.setIcon(new javax.swing.ImageIcon(getClass().getResource("/images/GUINewAccount/User_icon (Custom).png"))); // NOI18N
        jPanel1.add(jLabel5, new org.netbeans.lib.awtextra.AbsoluteConstraints(120, 180, 20, 20));

        jLabel6.setIcon(new javax.swing.ImageIcon(getClass().getResource("/images/GUINewAccount/Admin_icon (Custom).png"))); // NOI18N
        jPanel1.add(jLabel6, new org.netbeans.lib.awtextra.AbsoluteConstraints(220, 180, 20, 20));

        jPanel3.setBackground(new java.awt.Color(51, 51, 51));

        jPanel4.setBackground(new java.awt.Color(255, 255, 255));
        jPanel4.setLayout(new org.netbeans.lib.awtextra.AbsoluteLayout());

        btnCA.setBackground(new java.awt.Color(153, 255, 204));
        btnCA.setFont(new java.awt.Font("Constantia", 1, 14)); // NOI18N
        btnCA.setForeground(new java.awt.Color(51, 51, 51));
        btnCA.setText("Create account");
        jPanel4.add(btnCA, new org.netbeans.lib.awtextra.AbsoluteConstraints(60, 250, 143, -1));

        txtSPCode.setBackground(new java.awt.Color(51, 51, 51));
        txtSPCode.setForeground(new java.awt.Color(204, 204, 204));
        txtSPCode.setEnabled(false);
        txtSPCode.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                txtSPCodeActionPerformed(evt);
            }
        });
        jPanel4.add(txtSPCode, new org.netbeans.lib.awtextra.AbsoluteConstraints(90, 200, 90, -1));

        jLabel2.setFont(new java.awt.Font("Corbel", 1, 18)); // NOI18N
        jLabel2.setForeground(new java.awt.Color(0, 153, 153));
        jLabel2.setText("Create a new Account");
        jPanel4.add(jLabel2, new org.netbeans.lib.awtextra.AbsoluteConstraints(50, 10, -1, -1));

        txtUsernameNA.setBackground(new java.awt.Color(51, 51, 51));
        txtUsernameNA.setForeground(new java.awt.Color(204, 204, 204));
        txtUsernameNA.setText("Username");
        jPanel4.add(txtUsernameNA, new org.netbeans.lib.awtextra.AbsoluteConstraints(50, 30, 160, -1));

        txtPasswordNA.setBackground(new java.awt.Color(51, 51, 51));
        txtPasswordNA.setForeground(new java.awt.Color(204, 204, 204));
        txtPasswordNA.setText("Password");
        jPanel4.add(txtPasswordNA, new org.netbeans.lib.awtextra.AbsoluteConstraints(50, 60, 160, -1));

        txtNameNA.setBackground(new java.awt.Color(51, 51, 51));
        txtNameNA.setForeground(new java.awt.Color(204, 204, 204));
        txtNameNA.setText("Name");
        jPanel4.add(txtNameNA, new org.netbeans.lib.awtextra.AbsoluteConstraints(50, 90, 160, -1));

        javax.swing.GroupLayout jPanel3Layout = new javax.swing.GroupLayout(jPanel3);
        jPanel3.setLayout(jPanel3Layout);
        jPanel3Layout.setHorizontalGroup(
            jPanel3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel3Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jPanel4, javax.swing.GroupLayout.DEFAULT_SIZE, javax.swing.GroupLayout.DEFAULT_SIZE, Short.MAX_VALUE)
                .addContainerGap())
        );
        jPanel3Layout.setVerticalGroup(
            jPanel3Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(jPanel3Layout.createSequentialGroup()
                .addContainerGap()
                .addComponent(jPanel4, javax.swing.GroupLayout.PREFERRED_SIZE, 285, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addContainerGap(19, Short.MAX_VALUE))
        );

        jPanel1.add(jPanel3, new org.netbeans.lib.awtextra.AbsoluteConstraints(10, 10, 270, 310));

        getContentPane().add(jPanel1, new org.netbeans.lib.awtextra.AbsoluteConstraints(30, 20, 290, 330));

        jPanel2.setBackground(new java.awt.Color(0, 102, 102));

        javax.swing.GroupLayout jPanel2Layout = new javax.swing.GroupLayout(jPanel2);
        jPanel2.setLayout(jPanel2Layout);
        jPanel2Layout.setHorizontalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 350, Short.MAX_VALUE)
        );
        jPanel2Layout.setVerticalGroup(
            jPanel2Layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGap(0, 360, Short.MAX_VALUE)
        );

        getContentPane().add(jPanel2, new org.netbeans.lib.awtextra.AbsoluteConstraints(0, 0, 350, 360));

        pack();
    }// </editor-fold>//GEN-END:initComponents

    private void txtSPCodeActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_txtSPCodeActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_txtSPCodeActionPerformed

    /**
     * @param args the command line arguments
     */
   

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JButton btnCA;
    private javax.swing.JLabel jLabel1;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JLabel jLabel5;
    private javax.swing.JLabel jLabel6;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JPanel jPanel2;
    private javax.swing.JPanel jPanel3;
    private javax.swing.JPanel jPanel4;
    private javax.swing.JRadioButton rbtnAdmin;
    private javax.swing.JRadioButton rbtnUser;
    private javax.swing.JTextField txtNameNA;
    private javax.swing.JTextField txtPasswordNA;
    private javax.swing.JTextField txtSPCode;
    private javax.swing.JTextField txtUsernameNA;
    // End of variables declaration//GEN-END:variables
}
