package check;

import constants.Constants;

public class Check {
private static String firstName="坂田";
private static String lastName="優也";

private void printName(String firstName,String lastName) {
    System.out.println("printNameメソッド → "+firstName+lastName);
}
   
    public static void main(String[] args) {
        
Check check=new Check();
check.printName(firstName, lastName);

String name=Constants.CHECK_CLASS_JAVA;
String masterName=Constants.CHECK_CLASS_HOGE;
Pet pet=new Pet(name, masterName);
pet.introduce();


RobotPet robotPet=new RobotPet(Constants.CHECK_CLASS_R2D2,Constants.CHECK_CLASS_LUKE);
robotPet.introduce();

    }

}
