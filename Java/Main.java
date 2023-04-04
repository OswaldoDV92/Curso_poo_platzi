class Main {
    public static void main(String[] args){
        System.out.println("Hola Walo");
        Car car = new Car("WALO92", new Account("Walo Wayne", "WALO16", "", ""));
        car.setPassenger(4);
        /*car.license = "WALO92";
        car.driver = "Walo Wayne";*/
        //car.passenger = 4;
        car.printDataCar();
        //System.out.println("Car license: " + car.license);

        Car car2 = new Car("ALGO12", new Account("Alma Gonzalez", "ALM15", "", ""));
        /*car2.license = "ALGO12";
        car2.driver = "Alma Gonzalez";*/
        //car2.passenger = 3;
        car2.printDataCar();
        //System.out.println("Car license: " + car2.license);

        User user = new User("Ozz", "Ab12", "algo@nada.com", "lalilulelo");
        user.printDataUser();

        Driver driver = new Driver("Peter Parker", "AMZ700", "amazing@spider.man", "iamspiderman");
        driver.printDataDriver();

        UberVan ubervan = new UberVan("ABC123", new Account("Walo", "Walo16", "", ""));
        ubervan.setPassenger(6);
        ubervan.printDataCar();
    }
}