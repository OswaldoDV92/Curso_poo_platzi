public class User extends Account{
    Account name;
    Account document;
    Account email;
    Account password;

    public User(String name, String document, String email, String password){
        super(name, document, email, password);
    }
}
