<?php

trait CompanyTrait {
    public function getCompanyName() {
        return "Tech Solutions Inc.";
    }
}
class Company {
   use CompanyTrait;
   
}

$company = new Company();
echo $company->getCompanyName();
?>
