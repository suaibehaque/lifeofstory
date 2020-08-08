<?php require_once("header.php");
require_once("connect.php");
?>
<div class="container-fluid">
<div class="row full_color">

<div class="col-md-8">

<div class="container-fluid">
<div class="row full_color">
<div class="col-md-3"></div>
<div class="col-md-6">
<div class="signUp_border">
<div class="form_signUp_title"><span>Sign Up</span></div>
<div class="form_signUp">

<form method="POST" action="core file/signup_core.php">
    <input type="text" class="signup_input_feild" placeholder="Type Your First Name" name="fname"/><br/>
    <input type="text" class="signup_input_feild" placeholder="Type Your Last Name" name="lname"/><br/>
    <input type="email" class="signup_input_feild" placeholder="Type Your Email Address" name="usr_email"/><br/>
    <input type="password" class="signup_input_feild" placeholder="Type Your Password" name="usr_pwd"/> 
    <br/>
    <span class="signUpFont">Date Of Birth:</span>
    <br/>
    <select class="signup_select_felid" name="day">
       <option>Day</option>
        <option>01</option>
        <option>02</option>
        <option>03</option>
        <option>04</option>
        <option>05</option>
        <option>06</option>
        <option>07</option>
        <option>08</option>
        <option>09</option>
        <option>10</option>
        <option>11</option>
        <option>12</option>
        <option>13</option>
        <option>14</option>
        <option>15</option>
        <option>16</option>
        <option>17</option>
        <option>18</option>
        <option>19</option>
        <option>20</option>
        <option>21</option>
        <option>22</option>
        <option>23</option>
        <option>24</option>
        <option>25</option>
        <option>26</option>
        <option>27</option>
        <option>28</option>
        <option>29</option>
        <option>30</option>
        <option>31</option>
    </select>
    <select class="signup_select_felid" name="month">
        <option>Month</option>
        <option>January</option>
        <option>February</option>
        <option>March</option>
        <option>April</option>
        <option>May</option>
        <option>June</option>
        <option>July</option>
        <option>August</option>
        <option>Septembar</option>
        <option>October</option>
        <option>November</option>
        <option>December</option>
    </select>
    <select class="signup_select_felid" name="year" required>
<option>Year</option>
<option>2020</option>
<option>2019</option>
<option>2018</option>
<option>2017</option>
<option>2016</option>
<option>2015</option>
<option>2014</option>
<option>2013</option>
<option>2012</option>
<option>2011</option>
<option>2010</option>
<option>2009</option>
<option>2008</option>
<option>2007</option>
<option>2006</option>
<option>2005</option>
<option>2004</option>
<option>2003</option>
<option>2002</option>
<option>2001</option>
<option>2000</option>
<option>1999</option>
<option>1998</option>
<option>1997</option>
<option>1996</option>
<option>1995</option>
<option>1994</option>
<option>1993</option>
<option>1992</option>
<option>1991</option>
<option>1990</option>
<option>1989</option>
<option>1988</option>
<option>1987</option>
<option>1986</option>
<option>1985</option>
<option>1984</option>
<option>1983</option>
<option>1982</option>
<option>1981</option>
<option>1980</option>
<option>1979</option>
<option>1978</option>
<option>1977</option>
<option>1976</option>
<option>1975</option>
<option>1974</option>
<option>1973</option>
<option>1972</option>
<option>1971</option>
<option>1970</option>
<option>1969</option>
<option>1968</option>
<option>1967</option>
<option>1966</option>
<option>1965</option>
<option>1964</option>
<option>1963</option>
<option>1962</option>
<option>1961</option>
<option>1960</option>
<option>1959</option>
<option>1958</option>
<option>1957</option>
<option>1956</option>
<option>1955</option>
<option>1954</option>
<option>1953</option>
<option>1952</option>
<option>1951</option>
<option>1950</option>
<option>1949</option>
<option>1948</option>
<option>1947</option>
<option>1946</option>
<option>1945</option>
<option>1944</option>
<option>1943</option>
<option>1942</option>
<option>1941</option>
<option>1940</option>
<option>1939</option>
<option>1938</option>
<option>1937</option>
<option>1936</option>
<option>1935</option>
<option>1934</option>
<option>1933</option>
<option>1932</option>
<option>1931</option>
<option>1930</option>
<option>1929</option>
<option>1928</option>
<option>1927</option>
<option>1926</option>
<option>1925</option>
<option>1924</option>
<option>1923</option>
<option>1922</option>
<option>1921</option>
<option>1920</option>
<option>1919</option>
<option>1918</option>
<option>1917</option>
<option>1916</option>
<option>1915</option>
<option>1914</option>
<option>1913</option>
<option>1912</option>
<option>1911</option>
<option>1910</option>
<option>1909</option>
<option>1908</option>
<option>1907</option>
<option>1906</option>
<option>1905</option>
<option>1904</option>
<option>1903</option>
<option>1902</option>
<option>1901</option>
<option>1900</option>
    </select><br/>
    <div><span class="signUpFont">Gender:</span><br/>
            <span class="genderFont_signUp">
            <input type="radio" value="Female" name="gender"/>
            <label class="gender_label">Female</label></span>
            <span class="genderFont_signUp">
            <input type="radio" value="Male" name="gender"/>
            <label class="gender_label">Male</label> </span>
            <span class="genderFont_signUp">
            <input type="radio" value="Other" name="gender">
            <label class="gender_label">Other</label></span></div>
    <input type="submit" value="Sign Up" class="signUpBtn" name="SignUpBtn"/>
    
</form>
</div>
</div>

</div>
<div class="col-md-3"></div>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- disply -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-8559304347963965"
     data-ad-slot="4204462024"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>

</div>
</div>



</div>




<?php

require_once("side content.php");

?>


</div>
</div>

<?php require_once("footer.php")?>