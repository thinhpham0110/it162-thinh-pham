<!DOCTYPE html>
<html lang="en">

<head>
    <?php include './includes/header.php' ?>
    <link rel="stylesheet" href="./style/store.min.css">
</head>

<body>
    <?php include './includes/navbar.php' ?>
    <div class="store">
        <h1 class="store__title">Find Our Store</h1>
        <div class="store__box">
            <img src="./assets/icons/find.svg" alt="find" />
            <input class="store__input" placeholder="Enter you location" id="search" />
        </div>
        <div class="my-2 space-y-2 ">
            <div class="store__group" id="location">
            </div>
        </div>
        <div class="store__address">
            <iframe title="This is a unique title" class="store__map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387144.0075834208!2d-73.97800349999999!3d40.7056308!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY!5e0!3m2!1sen!2sus!4v1394298866288"></iframe>
            <div class="flex-1 ">
                <h1 class="store__sub">Contact Information</h1>
                <div class="store__information">
                    <div class="text-gray-200">
                        Phone:
                        <a id="phone" href="tel:+2032134000">+203-213-4000</a>
                    </div>
                    <div class="text-gray-200">
                        Email:
                        <a id="email" href="mailto:hello@gmail.com">support@milkmeovertea.com</a>
                    </div>
                    <div class="text-gray-200">
                        Address:
                        <p id="address">165/2 Street 3/2, Ward 11, District 10</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include './includes/footer.php' ?>
    <script>
        const data = [{
                name: "Ho Chi Minh City",
                phone: "+203-213-4000",
                email: "support@milkmeovertea.com",
                address: "165/2 Street 3/2, Ward 11, District 10"
            },
            {
                name: "Can Tho City",
                phone: "+414-544-6697",
                email: "support@milkmeovertea.com",
                address: "16 Le Lai Street, Ward 3"
            },
            {
                name: " Da Nang City",
                phone: "+574-258-4022",
                email: "support@milkmeovertea.com",
                address: "Highway 13, Block 1"
            },
            {
                name: " Tra Vinh City",
                phone: "+248-740-9921",
                email: "support@milkmeovertea.com",
                address: "266/28 To Hien Thanh St., Ward 15, Dist. 10",
            },
            {
                name: "Ha Noi Capital",
                phone: "+704-402-0899",
                email: "support@milkmeovertea.com",
                address: "2952C Pham The Hien, Ward7, District 8"
            },
            {
                name: "Ba Ria Vung Tau Province",
                phone: "+808-269-0042",
                email: "support@milkmeovertea.com",
                address: "14 Tran Minh Quyen Street, Ward 11, District 10",
            },
            {
                name: " Bien Hoa Province",
                phone: "+225-709-9109",
                email: "support@milkmeovertea.com",
                address: "1st Flr, 27 Nguyen Trung Truc, Dist.1"
            },
            {
                name: " Cang Long Province",
                phone: "+619-573-1501",
                email: "support@milkmeovertea.com",
                address: "34B/2E Thap Muoi St., Ward 2, Dist. 6"
            }, {
                name: "Las Vegas City",
                phone: "+727-523-1247",
                email: "support@milkmeovertea.com",
                address: "4 Alexandre De Rhodes Street, District 1",
            },
            {
                name: "Francisco California City",
                phone: "413-203-0713",
                email: "support@milkmeovertea.com",
                address: "46/7 Tan Thoi Hiep Ward, Dist.12",
            },
            {
                name: "San Jose City",
                phone: "+660-483-0068",
                email: "support@milkmeovertea.com",
                address: "250/1 Block 2",
            },
        ]

        let select = data[0];
        const button = data.map(item => `<button class="store__btn  ${select.name === item.name ? "active" : ""}">${item.name}</button>`);
        $("#location").html(button);

        $("#search").on("keydown", function() {
            const value = this.value.toLowerCase() || "";
            const newLocation = data.find((item) => item.name.toLowerCase().includes(value));
            select = newLocation;
            const button = data.map(item => `<button class="store__btn  ${select.name === item.name ? "active" : ""}">${item.name}</button>`);
            $("#location").html(button);
            $("#phone").text(select.phone);
            $("#email").text(select.email);
            $("#address").text(select.address);

        })
    </script>
</body>

</html>