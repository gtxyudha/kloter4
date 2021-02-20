public class patterndemo {
   public static void main(String[] args) {
      Context context = new Context();
 
      BarisPertama barispertama = new BarisPertama();
      barispertama.doAction(context);

      BarisKedua bariskedua = new BarisKedua();
      bariskedua.doAction(context);

      BarisKetiga barisketiga = new BarisKetiga();
      barisketiga.doAction(context);

      BarisKeempat bariskeempat = new BarisKeempat();
      bariskeempat.doAction(context);
 

   }
}

