public class BarisKeempat implements State {
 
   public void doAction(Context context) {
      System.out.println("10 13 15 16");
      context.setState(this);
   }
}