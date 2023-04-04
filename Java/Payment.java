public class Payment {
    Integer id;

    public Payment(Integer id){
        this.id = id;
    }

    void printPayment(){
        System.out.println("Id: " + id);
    }
}
