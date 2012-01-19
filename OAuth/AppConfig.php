<?php
/**
 * Copyright 2009 Fellowship Technologies
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License. You may obtain a copy of the License at http://www.apache.org/licenses/LICENSE-2.0
 * Unless required by applicable law or agreed to in writing, software distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and limitations under the License.
 *
 * Application specific configuration
 *
 * @author Jaskaran Singh (Jas)
 */

class AppConfig {
    /********************************DEBUG CONFIG*****************************************/
    // Set this to 1 if you want to output debugging information. Default is 0
    public static $debug = "0";
    // SimulateRequest prints the raw request to the page instead of sending it across the wire. Useful
    // when you want to see what is being sent, or to use tool like fiddler to tweak your request
    // Default is 0
    public static $simulateRequest = "0";

    /********************************CONFIG***********************************************/

    // 1 = Includes token secret in the query string appended to the call back uri so that we have access to
    // the token secret on the callback page. Since the request token is used to sign the request for access token, having the
    // token secret will be handy. Otherwise you will have to store the token secret in some fashion. (Session, DB etc.)
    public static $includeRequestSecretInUrl = "0";

    public static $lineBreak = "<br/>";

    /********************************KEYS*************************************************/
    //
    // Consumer Key and Secret (Provided by Service Provider
    //
    // The Base URL of the Service Provider
    public static $base_url = 'https://churchcode.staging.fellowshiponeapi.com';
    
    // Consumer Key
    public static $consumer_key = 'your key';
    // Consumer Secret
    public static $consumer_secret  = 'your secret';
    
    /********************************Relative Paths for requesting tokens*****************/
    // Path to request an unauthorized request token
    public static $requesttoken_path = "/v1/Tokens/RequestToken";
    // Path to request access token
    // Path to request access token
    //public static $accesstoken_path = "/v1/Tokens/AccessToken";
    // 2nd PARTY
    public static $accesstoken_path = "/v1/PortalUser/AccessToken";
    // The path consumer redirects the user to so that user can authenticate himself on the
    // service provider side
    public static $auth_path = "/v1/PortalUser/Login";

     // Callback URL. This the URL to which the user's browser is redirected after the service provider
    // validates the user's credentials
    public static $callbackURI = "http://localhost:8888/lakecenter/Callback.php";



    /********************************API Specific paths***********************************/
    public static $f1_household_create = "/v1/Households";
    public static $f1_household_people = "/v1/Households/{householdID}/People";
    public static $f1_people_create = "/v1/People";
    public static $f1_people_edit = "/v1/People/{id}/Edit";
    public static $f1_people_show = "/v1/People/{id} ";
    public static $f1_people_update = "/v1/People/{id}" ;
    public static $f1_statuses_list = "/v1/People/Statuses";
    public static $f1_householdMemberTypes_list = "/v1/People/HouseholdMemberTypes";
    public static $f1_people_search = "/v1/People/Search";	
    public static $f1_people_address = "/v1/People/{personID}/Addresses";
    public static $f1_people_address_update = "/v1/People/{personID}/Addresses/{id}";
    public static $f1_people_communications = "/v1/People/{id}/Communications";
    public static $f1_people_communications_update = "/v1/People/{personID}/Communications/{id}";
    public static $f1_addresstypes = "/v1/Addresses/AddressTypes";
    public static $f1_communicationtypes = "/v1/Communications/CommunicationTypes";

    public static $f1_household_show = "/v1/Households/{id}";
    public static $f1_household_edit = "/v1/Households/{id}/Edit";
    public static $f1_household_new = "/v1/Households/New";
    public static $f1_household_update = "/v1/Households/{id}";
    public static $f1_household_search = "/v1/Households/Search";

    public static $f1_householdMemberTypes_show = "/v1/People/HouseholdMemberTypes/{id}";

    public static $f1_peopleAttributes_list ="/v1/People/{peopleID}/Attributes";
    public static $f1_peopleAttributes_show ="v1/People/{peopleID}/Attributes/{id}";
    public static $f1_peopleAttributes_new ="/v1/People/{peopleID}/Attributes/New";
    public static $f1_peopleAttributes_edit ="/v1/People/{peopleID}/Attributes/{id}/Edit";
    public static $f1_peopleAttributes_create ="/v1/People/{peopleID}/Attributes";
    public static $f1_peopleAttributes_update ="/v1/People/{peopleID}/Attributes/{id}";
    public static $f1_peopleAttributes_delete  ="/v1/People/{peopleID}/Attributes/{id}";

    public static $f1_address_show ="/v1/Addresses/{id}";
    public static $f1_address_new ="/v1/Addresses/New";
    public static $f1_address_edit ="/v1/Addresses/{id}/Edit";
    public static $f1_address_create ="/v1/Addresses";
    public static $f1_address_update ="/v1/Addresses/{id}";
    public static $f1_address_delete ="/v1/Addresses/{id}";

    public static $f1_attributeGroups_list = "/v1/People/AttributeGroups";
    public static $f1_attributeGroups_show = "/v1/People/AttributeGroups/{id}";

    public static $f1_attribute_list = "/v1/People/AttributeGroups/{attributeGroupID}/Attributes";
    public static $f1_attribute_show ="/v1/People/AttributeGroups/{attributeGroupID}/Attributes/{id}";

    public static $f1_communications_show = "/v1/Communications/{id}";
    public static $f1_communications_new = "/v1/Communications/New";
    public static $f1_communications_edit = "/v1/Communications/{id}/Edit";
    public static $f1_communications_create = "/v1/Communications";
    public static $f1_communications_update = "/v1/Communications/{id}";
    public static $f1_communications_delete = "/v1/Communications/{id}";
    public static $f1_communicationtypes_show = "/v1/Communications/CommunicationTypes/{id}";
    public static $f1_denominations_list = "/v1/People/Denominations";
    public static $f1_denominations_show ="/v1/People/Denominations/{id}";
    public static $f1_occupations_list = "/v1/People/Occupations";
    public static $f1_occupations_show = "/v1/People/Occupations/{id}";
    public static $f1_schools_list = "/v1/People/Schools";
    public static $f1_schools_show = "/v1/People/Schools/{id}";
    public static $f1_statuses_show = "/v1/People/Statuses/{id}";
    public static $f1_substatuses_list = "/v1/People/Statuses/{statusID}/SubStatuses";
    public static $f1_substatuses_show = "/v1/People/Statuses/{statusID}/SubStatuses/{id}";
}
?>