/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
package ucr.ac.cr.proyecto2.controller;

import java.io.Serializable;
import java.util.List;
import javax.persistence.EntityManager;
import javax.persistence.EntityManagerFactory;
import javax.persistence.Query;
import javax.persistence.EntityNotFoundException;
import javax.persistence.Persistence;
import javax.persistence.criteria.CriteriaQuery;
import javax.persistence.criteria.Root;
import ucr.ac.cr.proyecto2.controller.exceptions.NonexistentEntityException;
import ucr.ac.cr.proyecto2.controller.exceptions.PreexistingEntityException;
import ucr.ac.cr.proyecto2.model.TbUsuarios;

/**
 *
 * @author Usuario
 */
public class TbUsuariosJpaController implements Serializable {

    private EntityManagerFactory emf = null;

    public TbUsuariosJpaController() {
        this.emf = Persistence.createEntityManagerFactory("proyectoAuto");
    }

    public EntityManager getEntityManager() {
        return emf.createEntityManager();
    }

    public void add(TbUsuarios tbUsuarios) throws PreexistingEntityException, Exception {
        EntityManager em = null;
        try {
            em = getEntityManager();
            em.getTransaction().begin();
            em.persist(tbUsuarios);
            em.getTransaction().commit();
        } catch (Exception ex) {
            if (search(tbUsuarios.getUsername()) != null) {
                throw new PreexistingEntityException("TbUsuarios " + tbUsuarios + " already exists.", ex);
            }
            throw ex;
        } finally {
            if (em != null) {
                em.close();
            }
        }
    }

    public void edit(TbUsuarios tbUsuarios) throws NonexistentEntityException, Exception {
        EntityManager em = null;
        try {
            em = getEntityManager();
            em.getTransaction().begin();
            tbUsuarios = em.merge(tbUsuarios);
            em.getTransaction().commit();
        } catch (Exception ex) {
            String msg = ex.getLocalizedMessage();
            if (msg == null || msg.length() == 0) {
                String id = tbUsuarios.getUsername();
                if (search(id) == null) {
                    throw new NonexistentEntityException("The tbUsuarios with id " + id + " no longer exists.");
                }
            }
            throw ex;
        } finally {
            if (em != null) {
                em.close();
            }
        }
    }

    public void delete(String id) throws NonexistentEntityException {
        EntityManager em = null;
        try {
            em = getEntityManager();
            em.getTransaction().begin();
            TbUsuarios tbUsuarios;
            try {
                tbUsuarios = em.getReference(TbUsuarios.class, id);
                tbUsuarios.getUsername();
            } catch (EntityNotFoundException enfe) {
                throw new NonexistentEntityException("The tbUsuarios with id " + id + " no longer exists.", enfe);
            }
            em.remove(tbUsuarios);
            em.getTransaction().commit();
        } finally {
            if (em != null) {
                em.close();
            }
        }
    }

    public List<TbUsuarios> findTbUsuariosEntities() {
        return findTbUsuariosEntities(true, -1, -1);
    }
    public List<TbUsuarios> consultarLista() {
        EntityManager em = getEntityManager();
        try {
            CriteriaQuery cq = em.getCriteriaBuilder().createQuery();
            cq.select(cq.from(TbUsuarios.class));
            Query q = em.createQuery(cq);
           
            return q.getResultList();
        } finally {
            em.close();
        }
    }

    public List<TbUsuarios> findTbUsuariosEntities(int maxResults, int firstResult) {
        return findTbUsuariosEntities(false, maxResults, firstResult);
    }

    private List<TbUsuarios> findTbUsuariosEntities(boolean all, int maxResults, int firstResult) {
        EntityManager em = getEntityManager();
        try {
            CriteriaQuery cq = em.getCriteriaBuilder().createQuery();
            cq.select(cq.from(TbUsuarios.class));
            Query q = em.createQuery(cq);
            if (!all) {
                q.setMaxResults(maxResults);
                q.setFirstResult(firstResult);
            }
            return q.getResultList();
        } finally {
            em.close();
        }
    }

    public TbUsuarios search(String id) {
        EntityManager em = getEntityManager();
        try {
            return em.find(TbUsuarios.class, id);
        } finally {
            em.close();
        }
    }

    public int getTbUsuariosCount() {
        EntityManager em = getEntityManager();
        try {
            CriteriaQuery cq = em.getCriteriaBuilder().createQuery();
            Root<TbUsuarios> rt = cq.from(TbUsuarios.class);
            cq.select(em.getCriteriaBuilder().count(rt));
            Query q = em.createQuery(cq);
            return ((Long) q.getSingleResult()).intValue();
        } finally {
            em.close();
        }
    }
    
    public String [][] getMatrix(){
        String [][] data = new String[this.consultarLista().size()][TbUsuarios.ETIQUETA_USUARIOS.length];
        
        for(int i =0; i < data.length; i++){
            for (int j = 0; j < data[0].length; j++) {
                data[i][j] = this.consultarLista().get(i).data(j);
                
            }
                   
        }
        return data;
    }
    
    
    
}
