public class BarisKedua implements State {
 
   public void doAction(Context context) {
      System.out.println("3  5  8  11");
      context.setState(this);
   }
}