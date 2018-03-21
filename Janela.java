package Exercicio03;

import java.awt.Container;
import java.awt.GridLayout;
import java.awt.event.ItemEvent;
import java.awt.event.ItemListener;
import javax.swing.JButton;
import javax.swing.JCheckBox;
import javax.swing.JFrame;
import javax.swing.JLabel;
//import javax.swing.JTextField;

public class Janela extends JFrame{
    
    private JCheckBox sair, usuario, venda, carro, comissao, totvenda;
    //private JTextField janela;
    private JButton enviar;
                
    public Janela (){        
        
    super("Janela");    
    
        //janela = new JTextField();
        
        //Criando os JCheckBox
        usuario = new JCheckBox("Adicionar Usuário");
        usuario.addItemListener(new CheckListener());

        venda = new JCheckBox("Adicionar Venda");
        venda.addItemListener(new CheckListener());

        carro = new JCheckBox("Adicionar Carro");
        carro.addItemListener(new CheckListener());

        comissao = new JCheckBox("Adicionar Comissão");
        comissao.addItemListener(new CheckListener());

        totvenda = new JCheckBox("Adicionar Total Vendido");
        totvenda.addItemListener(new CheckListener());
        
        //Criando os JBUtton
        enviar = new JButton("Enviar");
        //enviar.addActionListener(this);
        
        Container c = getContentPane();
        setLayout(new GridLayout(6, 0));
        c.add(new JLabel("Marque uma Opção:"));
        //c.add(janela);
        c.add(usuario);
        c.add(venda); 
        c.add(carro); 
        c.add(comissao); 
        c.add(totvenda);
        c.add(enviar);        

        setVisible(true);
        setSize(300,300);
        setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);          
    }
    
    class CheckListener implements ItemListener {

        @Override
        public void itemStateChanged(ItemEvent e) {
            if(usuario.isSelected()) {
                
            }else if(venda.isSelected()) {
                
            }else if(carro.isSelected()) {
                
            }else if(comissao.isSelected()) {
                
            }else if(totvenda.isSelected()) {
                
            }else {
                                
            }                   
        }            
    }
}

    
    

