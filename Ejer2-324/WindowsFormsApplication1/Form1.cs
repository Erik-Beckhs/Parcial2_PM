using System;
using System.Collections.Generic;
using System.ComponentModel;
using System.Data;
using System.Drawing;
using System.Linq;
using System.Text;
using System.Threading.Tasks;
using System.Windows.Forms;

namespace WindowsFormsApplication1
{
    public partial class Form1 : Form
    {
        Bitmap bmp;
        public Form1()
        {
            InitializeComponent();
        }

        private void btnCarga_Click(object sender, EventArgs e)
        {
            openFileDialog1.Filter = "Archivos JPG |*.jpg|Archivos BMP|*.bmp|Todos los archivos|*.*";
            openFileDialog1.ShowDialog();
            bmp = new Bitmap(openFileDialog1.FileName);
            pictureBox1.Image = bmp;
        }

        private void btnContorno_Click(object sender, EventArgs e)
        {
            Bitmap bmp1 = new Bitmap(bmp.Width, bmp.Height);
            int width = bmp.Width - 1, height = bmp.Height - 1;
            for (int i = 1; i < width; i++)
            {
                for (int j = 1; j < height; j++)
                {
                    Color a, b, c, d, f;
                    a = bmp.GetPixel(i, j - 1);
                    b = bmp.GetPixel(i - 1, j);
                    c = bmp.GetPixel(i, j);
                    d = bmp.GetPixel(i + 1, j);
                    f = bmp.GetPixel(i, j + 1);
                    int red = a.R + b.R + c.R * (-4) + d.R + f.R;
                    int green = a.G + b.G + c.G * (-4) + d.G + f.G;
                    int blue = a.B + b.B + c.B * (-4) + d.B + f.B;
                    int media = (red + green + blue) / 3;
                    if (media > 255) media = 255;
                    if (media < 0) media = 0;
                    bmp1.SetPixel(i, j, Color.FromArgb(media, media, media));
                }
            }
            pictureBox1.Image = bmp1; 
        }
    }
}
