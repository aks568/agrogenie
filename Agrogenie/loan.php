<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>
<center><h1 style="font-family: 'Sacramento', cursive;font-size:45px;" id="heading">Loan Information</h1></center>
<div class="container" style="font-family: 'Quicksand',sans-serif;" id="main">
<hr style="border:0.5px solid grey;width: 75%;">
<p style="font-size:18px;">Agricultural loan is offered by traditional lenders such as banks as well as dedicated government agencies to facilitate various agricultural activities. 
The loan can be availed by farmers to finance agricultural projects such as to purchase new land, upgrade or buy new farm machinery, 
construct irrigation channels, build grain storage sheds, etc. The following sections discuss key aspects of an agricultural loan, including various 
features, interest rates, types of agricultural loans and more.</p>
<ul style="font-family:'Quicksand',san-serif;font-size:18px;">
<a href="#"><li onclick="i1()">Features of Agriculture Loan</li></a>
<a href="#"><li onclick="i2()">Interest Rates</li></a>
<a href="#"><li onclick="i3()">Types of Agricultural Loans</li></a>
<a href="#"><li onclick="i4()">Eligibility Criteria</li></a>
<a href="#"><li onclick="i5()">Documents Required For Loan Application</li></a>
<a href="#"><li onclick="i6()">Providers of Agricultural Loan</li></a>
<a href="#"><li onclick="i7()">Benefits of Agricultural Loan</li></a>
</ul>
<script>
    function i1()
    {
        document.getElementById("heading").innerHTML="Features of Agriculture Loan";
        document.getElementById("main").innerHTML=`<hr style="border:0.5px solid grey;width: 75%;"><dl style="font-family:Quicksand,san-serif;font-size:18px;">
        <dt>End-use Flexibility:</dt><dd>Agricultural loan can be availed to meet a variety of expenses related to farm activities, such as to purchase new farmland/ cattle or to manage the operating costs and other allied activities.</dd>
        <dt>Various Types:</dt><dd> Several types of agricultural loan exist on the basis of end use as well as the repayment tenure.</dd>
        <dt>Minimal Documentation:</dt><dd> Generally, the agricultural loan can be availed with simple and minimal documentation.</dd>
        <dt>Collateral Optional:</dt><dd>Both secured and unsecured agricultural loans are offered on the basis of loan quantum and applicant profile.</dd></dl>
        <center><a href="loan.php"><button type="button" class="btn btn-outline-dark">Go Back</button></a></center>`;
    }
    function i2()
    {
        document.getElementById("heading").innerHTML="Interest Rates";
        document.getElementById("main").innerHTML=`<hr style="border:0.5px solid grey;width: 75%;"><table class="table table-striped" style="font-size:18px;">
        <thead><tr><th>Name of the Lender</th><th>Rate of Interest (p.a)</th></tr></thead>
        <tbody><tr><td>State Bank of India (SBI)</td><td>7.50% onwards</td></tr>
        <tr><td>Central Bank</td><td>7.50% onwards</td></tr><tr><td>Indulsand Bank</td><td>9.50% onwards</td></tr>
        <tr><td>ICICI Bank</td><td>9.60% onwards</td></tr><tr><td>Axis Bank</td><td>Based on the applicant’s profile</td></tr>
        </tbody></table><center><a href="loan.php"><button type="button" class="btn btn-outline-dark">Go Back</button></a></center>`;
    }
    function i3()
    {
        document.getElementById("heading").innerHTML="Types of Agricultural Loans";
        document.getElementById("main").innerHTML=`<hr style="border:0.5px solid grey;width: 75%;"><dl style="font-family:Quicksand,san-serif;font-size:18px;">
        <dt>On The Basis of Loan Tenure</dt><dd><ul><li>Crop Loan/ Kisan Credit Card (Retail Agri Loan):Kisan Credit Card/ Kisan Card is an ideal agriculture loan option to meet short term credit requirements, such as expenses resulting from cultivation of crops, post-harvest activities, maintenance of farm equipment, etc. The card is generally available in the form of an electronic RuPay Card, which the farmers can use to draw money from ATMs to make the required purchase. Thus, it provides convenient credit to meet your daily farm requirements.</li>
        <li>Agriculture Term Loan: This refers to the long term loans of up to 48 months offered by various lenders to meet agricultural expenditures that are generally not seasonal in nature. The loan amount can be used to purchase new machinery or upgrade existing ones, install solar power, windmills, etc. Banks generally allow repayment tenure of 3 to 4 years for this loan, so that you can pay back the borrowed amount back in monthly/bi-annual/yearly installments as per the borrower’s convenience.</li></ul></dd>
        <dt>On The Basis of End Use</dt><dd><ul><li>Farm Mechanization Loan: This loan can be used to purchase new machinery, repair/ replace old ones, purchase tractors or harvesters, or any other agricultural equipment. While some banks provide a general purpose loan, others have categorized these loans into different types based on the end-use. For example, State Bank of India offers tractor loans, combine harvester loans and loans for irrigation equipment.</li>
        <li>Solar Pump Set Loan: This agricultural loan is offered for the purchase of photo voltaic pumping system for small irrigation projects. It is generally a long term loan with repayment tenure of up to 10 years.</li>
        <li>Loan for Allied Agricultural Activities: This loan is offered to farmers to meet working capital requirements and long term investment needs for allied agricultural activities.</li></ul></dd>
        <dt>Other Loan Types</dt><dd><ul><li>Horticultural Loan: This agricultural loan is given for development of the land for setting up orchards or vegetable farms, clearing of undergrowth or wild trees, minor irrigation activities, setting up boundary walls / fencing and other horticultural reasons.</li>
        <li>Agricultural Gold Loan: This loan is provided to farmers against the pledge of gold ornaments. It may be offered for crop cultivation as well as for other agricultural purposes. This loan features relatively low interest rates and helps farmers unlock the value of their gold jewellery that is usually lying idle in the house or bank locker.</li>
        <li>Forestry Loan: This agricultural loan is given for raising crops that grow on trees. Like horticulture loans, it can be given to clear the undergrowth or wild trees, turn barren land into cultivable land, prepare land by setting up irrigation channels, and so on.</li></ul></dd></dl>
        <center><a href="loan.php"><button type="button" class="btn btn-outline-dark">Go Back</button></a></center>`;
    }
    function i4()
    {
        document.getElementById("heading").innerHTML="Eligibility Criteria";
        document.getElementById("main").innerHTML=`<hr style="border:0.5px solid grey;width: 75%;"><dl style="font-family:Quicksand,san-serif;font-size:18px;">
        <dt>Who is Eligible?</dt><dd><ul><li>Individual farmers/ Joint cultivator owners</li><li>Tenant farmers, share croppers, and oral lessees etc.</li><li>Self Help Groups (SHGs) or Joint Liability Groups (JLGs) including tenant farmers.</li></ul></dd>
        <dt>Residential Status</dt><dd>Resident Indian</dd>
        <dt>Eligibility Age</dt><dd>18-70 years</dd>
        <dt>Land Ownership</dt><dd>Generally, should own a piece of agricultural land or have access to agricultural land for specified purposes</dd></dl>
        <center><a href="loan.php"><button type="button" class="btn btn-outline-dark">Go Back</button></a></center>`;
    }
    function i5()
    {
        document.getElementById("heading").innerHTML="Documents Required For Loan Application";
        document.getElementById("main").innerHTML=`<hr style="border:0.5px solid grey;width: 75%;"><ul style="font-family:Quicksand,san-serif;font-size:18px;">
        <li>Proof of Identity: This may include your Aadhaar, Voter ID, Passport, Driving License, etc.</li>
        <li>Proof of Address: This may include the latest utility bill, bank passbook, Aadhaar Card, PAN Card, etc.</li>
        <li>Duly filled loan application form</li>
        <li>Land Documents</li>
        <li>Security Post Dated Cheques (PDCs) or other collateral (as applicable)</li></ul>
        <center><a href="loan.php"><button type="button" class="btn btn-outline-dark">Go Back</button></a></center>`;
    }
    function i6()
    {
        document.getElementById("heading").innerHTML="Providers of Agricultural Loan";
        document.getElementById("main").innerHTML=`<hr style="border:0.5px solid grey;width: 75%;"><table class="table table-striped" style="font-size:18px;">
        <thead><tr><th>Name of the Lender</th><th>Major Types of Agricultural Loans Offered</th></tr></thead>
        <tbody><tr><td>State Bank of India (SBI)</td><td><ul><li>Crop Loan</li><li>Kisan Credit Card (KCC)</li><li>Drip Irrigation Loan</li><li>Combine Harvestor Loan</li></ul></td></tr>
        <tr><td>ICICI Bank</td><td><ul><li>Retail Agricultural Loan</li><li>Long Term Agricultural Loan</li></ul></td></tr>
        <tr><td>Central Bank of India</td><td><ul><li>Cent Kisan Tatkal Scheme</li><li>Cent Vermicompost Scheme</li><li>Cent Solar Water Heater Scheme</li><li>Kisan Credit Card</li></ul></td></tr>
        <tr><td>Union Bank</td><td><ul><li>Crop Loan</li><li>Union Gold Loan</li><li>Kisan Credit Card</li><li>Bio Gas Loan</li><li>Farm Mechanization Loan</li></ul></td></tr>
        <tr><td>Axis Bank</td><td><ul><li>Kisan Power</li><li>Kisan Matsya</li><li>Kisan Mitra</li><li>AGPRO Power</li></ul></td></tr>
        <tr><td>National Bank or Agriculture and Rural Development (NABARD)</td><td><ul><li>Agriclinic and Agribusiness Centres Scheme</li><li>National Livestock Mission</li><li>New Agricultural Marketing Infrastructure</li></ul></td></tr>
        </tbody></table><center><a href="loan.php"><button type="button" class="btn btn-outline-dark">Go Back</button></a></center>`;
    }
    function i7()
    {
        document.getElementById("heading").innerHTML="Benefits of Agricultural Loan";
        document.getElementById("main").innerHTML=`<hr style="border:0.5px solid grey;width: 75%;"><ul style="font-family:Quicksand,san-serif;font-size:18px;">
        <li>Available with minimal documentation.</li>
        <li>Special Interest rates starting at 7.50% p.a. May be lower for specified Government backed schemes</li>
        <li>You can repay the loan over flexible repayment tenure.</li>
        <li>Some lenders also offer unsecured agricultural loan, depending on the applicant’s profile and the quantum of loan applied for.</li>
        <li>You can use the agricultural loan amount for a variety of agricultural purposes, ranging from short-term seasonal farm activities to long-term investment in farm machinery.</li></ul>
        <center><a href="loan.php"><button type="button" class="btn btn-outline-dark">Go Back</button></a></center>`;
    }
</script>
</div>