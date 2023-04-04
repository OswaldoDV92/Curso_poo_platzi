public class Paypal extends Payment{
    String reference;
    String subsidiary;
    Payment id;

    public Paypal(Integer id, String reference, String subsidiary){
        super(id);
        this.reference = reference;
        this.subsidiary = subsidiary;
    }
}
