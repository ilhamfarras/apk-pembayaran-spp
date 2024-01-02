/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package View;

import java.io.File;
import java.util.HashMap;
import java.util.Map;
import javax.swing.JOptionPane;
import koneksiDB.Koneksi;
/**
 *
 * @author amwulandesign
 */
public class FrmMenuUtama extends javax.swing.JFrame {

    /**
     * Creates new form FrmMenuUtama
     */
    public FrmMenuUtama() {
        initComponents();
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
        dpMenuUtama = new javax.swing.JPanel();
        jSeparator1 = new javax.swing.JSeparator();
        jLabel2 = new javax.swing.JLabel();
        jMenuBar1 = new javax.swing.JMenuBar();
        jMenu1 = new javax.swing.JMenu();
        jMenuItem1 = new javax.swing.JMenuItem();
        menuStaff = new javax.swing.JMenu();
        menuSpp = new javax.swing.JMenu();
        menuSiswa = new javax.swing.JMenu();
        menuTransaksi = new javax.swing.JMenu();

        setDefaultCloseOperation(javax.swing.WindowConstants.EXIT_ON_CLOSE);

        jPanel1.setBackground(new java.awt.Color(70, 173, 169));
        jPanel1.setLayout(null);

        javax.swing.GroupLayout dpMenuUtamaLayout = new javax.swing.GroupLayout(dpMenuUtama);
        dpMenuUtama.setLayout(dpMenuUtamaLayout);
        dpMenuUtamaLayout.setHorizontalGroup(
            dpMenuUtamaLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(javax.swing.GroupLayout.Alignment.TRAILING, dpMenuUtamaLayout.createSequentialGroup()
                .addContainerGap(806, Short.MAX_VALUE)
                .addComponent(jSeparator1, javax.swing.GroupLayout.PREFERRED_SIZE, 50, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(44, 44, 44))
        );
        dpMenuUtamaLayout.setVerticalGroup(
            dpMenuUtamaLayout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addGroup(dpMenuUtamaLayout.createSequentialGroup()
                .addContainerGap(457, Short.MAX_VALUE)
                .addComponent(jSeparator1, javax.swing.GroupLayout.PREFERRED_SIZE, 10, javax.swing.GroupLayout.PREFERRED_SIZE)
                .addGap(33, 33, 33))
        );

        jPanel1.add(dpMenuUtama);
        dpMenuUtama.setBounds(60, 140, 900, 500);

        jLabel2.setFont(new java.awt.Font("Segoe UI Semibold", 3, 60)); // NOI18N
        jLabel2.setForeground(new java.awt.Color(255, 255, 255));
        jLabel2.setText("APLIKASI PEMBAYARAN SPP");
        jPanel1.add(jLabel2);
        jLabel2.setBounds(110, 30, 790, 70);

        jMenu1.setText("FILE");

        jMenuItem1.setText("LOGOUT");
        jMenuItem1.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                jMenuItem1ActionPerformed(evt);
            }
        });
        jMenu1.add(jMenuItem1);

        jMenuBar1.add(jMenu1);

        menuStaff.setText("STAFF");
        menuStaff.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                menuStaffMouseClicked(evt);
            }
        });
        menuStaff.addActionListener(new java.awt.event.ActionListener() {
            public void actionPerformed(java.awt.event.ActionEvent evt) {
                menuStaffActionPerformed(evt);
            }
        });
        jMenuBar1.add(menuStaff);

        menuSpp.setText("SPP");
        menuSpp.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                menuSppMouseClicked(evt);
            }
        });
        jMenuBar1.add(menuSpp);

        menuSiswa.setText("DATA SISWA");
        menuSiswa.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                menuSiswaMouseClicked(evt);
            }
        });
        jMenuBar1.add(menuSiswa);

        menuTransaksi.setText("TRANSAKSI");
        menuTransaksi.addMouseListener(new java.awt.event.MouseAdapter() {
            public void mouseClicked(java.awt.event.MouseEvent evt) {
                menuTransaksiMouseClicked(evt);
            }
        });
        jMenuBar1.add(menuTransaksi);

        setJMenuBar(jMenuBar1);

        javax.swing.GroupLayout layout = new javax.swing.GroupLayout(getContentPane());
        getContentPane().setLayout(layout);
        layout.setHorizontalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel1, javax.swing.GroupLayout.DEFAULT_SIZE, 1025, Short.MAX_VALUE)
        );
        layout.setVerticalGroup(
            layout.createParallelGroup(javax.swing.GroupLayout.Alignment.LEADING)
            .addComponent(jPanel1, javax.swing.GroupLayout.PREFERRED_SIZE, 707, javax.swing.GroupLayout.PREFERRED_SIZE)
        );

        setSize(new java.awt.Dimension(1041, 767));
        setLocationRelativeTo(null);
    }// </editor-fold>//GEN-END:initComponents

    private void menuStaffMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_menuStaffMouseClicked
        // TODO add your handling code here:
        FrmStaff staff = new FrmStaff();
        dpMenuUtama.add(staff);
        staff.setVisible(true);
    }//GEN-LAST:event_menuStaffMouseClicked

    private void menuSiswaMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_menuSiswaMouseClicked
        // TODO add your handling code here:
        FrmSiswa siswa = new FrmSiswa();
        dpMenuUtama.add(siswa);
        siswa.setVisible(true);
    }//GEN-LAST:event_menuSiswaMouseClicked

    private void menuSppMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_menuSppMouseClicked
        // TODO add your handling code here:
        FrmSpp spp = new FrmSpp();
        dpMenuUtama.add(spp);
        spp.setVisible(true);
    }//GEN-LAST:event_menuSppMouseClicked

    private void jMenuItem1ActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_jMenuItem1ActionPerformed
        // TODO add your handling code here:
        dispose();
    }//GEN-LAST:event_jMenuItem1ActionPerformed

    private void menuTransaksiMouseClicked(java.awt.event.MouseEvent evt) {//GEN-FIRST:event_menuTransaksiMouseClicked
        // TODO add your handling code here:
        FrmTransaksi tran = new FrmTransaksi();
        dpMenuUtama.add(tran);
        tran.setVisible(true);
    }//GEN-LAST:event_menuTransaksiMouseClicked

    private void menuStaffActionPerformed(java.awt.event.ActionEvent evt) {//GEN-FIRST:event_menuStaffActionPerformed
        // TODO add your handling code here:
    }//GEN-LAST:event_menuStaffActionPerformed

    /**
     * @param args the command line arguments
     */
    public static void main(String args[]) {
        /* Set the Nimbus look and feel */
        //<editor-fold defaultstate="collapsed" desc=" Look and feel setting code (optional) ">
        /* If Nimbus (introduced in Java SE 6) is not available, stay with the default look and feel.
         * For details see http://download.oracle.com/javase/tutorial/uiswing/lookandfeel/plaf.html 
         */
        try {
            for (javax.swing.UIManager.LookAndFeelInfo info : javax.swing.UIManager.getInstalledLookAndFeels()) {
                if ("Nimbus".equals(info.getName())) {
                    javax.swing.UIManager.setLookAndFeel(info.getClassName());
                    break;
                }
            }
        } catch (ClassNotFoundException ex) {
            java.util.logging.Logger.getLogger(FrmMenuUtama.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (InstantiationException ex) {
            java.util.logging.Logger.getLogger(FrmMenuUtama.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (IllegalAccessException ex) {
            java.util.logging.Logger.getLogger(FrmMenuUtama.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        } catch (javax.swing.UnsupportedLookAndFeelException ex) {
            java.util.logging.Logger.getLogger(FrmMenuUtama.class.getName()).log(java.util.logging.Level.SEVERE, null, ex);
        }
        //</editor-fold>

        /* Create and display the form */
        java.awt.EventQueue.invokeLater(new Runnable() {
            public void run() {
                new FrmMenuUtama().setVisible(true);
            }
        });
    }

    // Variables declaration - do not modify//GEN-BEGIN:variables
    private javax.swing.JPanel dpMenuUtama;
    private javax.swing.JLabel jLabel2;
    private javax.swing.JMenu jMenu1;
    private javax.swing.JMenuBar jMenuBar1;
    private javax.swing.JMenuItem jMenuItem1;
    private javax.swing.JPanel jPanel1;
    private javax.swing.JSeparator jSeparator1;
    private javax.swing.JMenu menuSiswa;
    private javax.swing.JMenu menuSpp;
    private javax.swing.JMenu menuStaff;
    private javax.swing.JMenu menuTransaksi;
    // End of variables declaration//GEN-END:variables
}
