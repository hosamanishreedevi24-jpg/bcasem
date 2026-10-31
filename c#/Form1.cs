using System;
using System.Windows.Forms;
namespace c_programs;


public partial class Form1 : Form
{
    Label lbResult;
    public Form1()
    {
        InitializeComponent();
        this.Text="Eventapp";
        this.Size=new Size(300,400);
        this.KeyPreview=true;
        lbResult=new Label();
        lbResult.Text="Eventclick";
        lbResult.Size= new Size(300,400);
        lbResult.Location= new Point(30,40);
        this.Controls.Add(lbResult);

        this. MouseClick += Form1_MouseClick;
        this.KeyDown += Form1_keyDown;
        this.KeyPreview = true;
    }
