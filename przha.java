import java.util.*;

class przha {
 	public static void main (String[]args){
	Scanner a = new Scanner(System.in);

	System.out.println("number my name");
	int size = a.nextInt();
	char myname[] = new char [size];

	System.out.println("letters");
	for (int b=0 ; b<myname.length ; b++){
		myname[b] = a.next().charAt(0);

	}

		System.out.print("my name is : ");
		for (int b=0; b<myname.length; b++){
			System.out.print(myname[b]);

			}

	System.out.println(" ");
		}
}





































