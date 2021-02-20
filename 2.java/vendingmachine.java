import java.util.Scanner;
public class vendingmachine {
    public static void main(String args[])
    {
        Scanner input = new Scanner(System.in);
        int cocacola = 4000;
        int fanta = 3500;
        int pepsi = 4500;

        int inputcocacola;
        int inputfanta;
        int inputpepsi;
        int jumlah;
        int bayar;
        int kembalian;

        
         System.out.println("--- PROGRAM JAVA MENAMPILKAN Vending Machine ---");
         System.out.println("********** Menu CocaCola Rp. 4.000 ********");
         System.out.println("********** Menu    Fanta Rp. 3.500 ********");
         System.out.println("********** Menu    Pepsi Rp. 4.500 ********");
         System.out.println("");
         System.out.print("Masukkan CocaCola : ");
         inputcocacola=input.nextInt();
         System.out.print("Masukkan Fanta : ");
         inputfanta=input.nextInt();
         System.out.print("Masukkan Pepsi : ");
         inputpepsi=input.nextInt();
         System.out.print("Masukkan Jumlah Pembayaran : ");
         bayar=input.nextInt();

         System.out.println("----------------------------------------------");
         System.out.println("Coca - cola = Rp. "+ cocacola + " * " + inputcocacola);
         System.out.println("Fanta = Rp. "+ fanta + " * " + inputfanta);
         System.out.println("Pepsi = Rp. "+ pepsi + " * " + inputpepsi);
         System.out.println("Jumlah = " + (inputpepsi + inputcocacola + inputfanta));
         int total = (inputcocacola * cocacola) + (inputpepsi * pepsi);
         System.out.println("Total = "+ total);
         System.out.println("Dibayar = "+ bayar);



         System.out.println("");
         System.out.println("Kembalian:");
         kembalian = bayar - total;
         Terbilang terbilang = new Terbilang();
         System.out.println("Total Kembalian: Rp "+ kembalian + " ( " + terbilang.angka(kembalian) + "Rupiah )");
   }

   
}