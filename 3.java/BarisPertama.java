public class BarisPertama implements State {
 
   public void doAction(Context context) {
      System.out.println("1  2  4  7");
      context.setState(this);
   }
}