/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package ucr.ac.cr.proyecto2.model;

import java.io.Serializable;
import javax.persistence.Basic;
import javax.persistence.Column;
import javax.persistence.Entity;
import javax.persistence.Id;
import javax.persistence.Table;

/**
 *
 * @author fabri
 */
@Entity
@Table(name = "tb_usuarios")
public class TbUsuarios implements Serializable {

    private static final long serialVersionUID = 1L;
    @Id
    @Basic(optional = false)
    @Column(name = "username")
    private String username;
    @Basic(optional = false)
    @Column(name = "password")
    private String password;
    @Basic(optional = false)
    @Column(name = "name")
    private String name;
    @Basic(optional = false)
    @Column(name = "profile")
    private String profile;
    
    
    public static final String [] ETIQUETA_USUARIOS={"Username","Password","Name", "Profile"};

    public TbUsuarios() {
    }

    public TbUsuarios(String username) {
        this.username = username;
    }

    public TbUsuarios(String username, String password, String name, String profile) {
        this.username = username;
        this.password = password;
        this.name = name;
        this.profile = profile;
    }

    public String getUsername() {
        return username;
    }

    public void setUsername(String username) {
        this.username = username;
    }

    public String getPassword() {
        return password;
    }

    public void setPassword(String password) {
        this.password = password;
    }

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public String getProfile() {
        return profile;
    }

    public void setProfile(String profile) {
        this.profile = profile;
    }

    @Override
    public String toString() {
        return "ucr.ac.cr.proyecto2.model.TbUsuarios[ username=" + username + " ]";
    }
    
    public String data(int columna){
            switch(columna){
                case 0: return getUsername();
                case 1: return getPassword();
                case 2: return getName();
                case 3: return getProfile();
                    
            }
            return null;
        }
    
}
