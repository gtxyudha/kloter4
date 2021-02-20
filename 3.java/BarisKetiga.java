public class BarisKetiga implements State {
 
   public void doAction(Context context) {
      System.out.println("6  9  12 14");
      context.setState(this);
   }
}
