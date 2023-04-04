public class Account {
    Integer id;
    String name;
    String document;
    String email;
    String password;

    /*public Account(String name, String document){
        this.name = name;
        this.document = document;
    }*/

    public Account(String name, String document, String email, String password){
        this.name = name;
        this.document = document;
        this.email = email;
        this.password = password;
    }

    void printDataUser(){
        System.out.println("Name: " + name + " Document: " + document + " Email: " + email + " Password: " + password);
    }

    void printDataDriver(){
        System.out.println("Driver: " + name + " Document: " + document + " Email: " + email + " Password: " + password);
    }
}
