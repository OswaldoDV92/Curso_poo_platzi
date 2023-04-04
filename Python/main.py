from car import Car
from account import Account
from uberx import UberX
from user import User
from driver import Driver

if __name__ == "__main__":
    print("Hola Walo")

    uberx = UberX("GTA64", Account("Marta", "Mar587", "", ""), "Chevrolet", "Spark")
    print(vars(uberx))

    car = Car("WAL789", Account("Walo Wayne", "WY4567", "", ""))
    print(vars(car))
    print(vars(car.driver))

    user = User("Ozz", "ODV92", "ozz@rules.com", "ozzrules")
    print(vars(user))

    driver = Driver("Peter Parker", "AMZ700", "amazing@spider.man", "iamspiderman")
    print(vars(driver))

    """car = Car()
    car.license = "WALO92"
    car.driver = "Walo Wayne"
    car.passenger = 5
    print(vars(car))

    car2 = Car()
    car2.license = "MAWA55"
    car2.driver = "Marta Wayne"
    car2.passenger = 5
    print(vars(car2))"""
