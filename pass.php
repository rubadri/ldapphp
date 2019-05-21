<?php
function authenticate($user, $password)
{

    $ldaprdn = $user; // ldap rdn or dn
    $ldappass = $password; // associated password

// connect to ldap server
    $ldapconn = ldap_connect('192.168.207.11')
    or die("Could not connect to LDAP server.");

    ldap_set_option($ldapconn, LDAP_OPT_PROTOCOL_VERSION, 3) ;


    var_dump($password);

    if ($ldapconn)
    {
        // binding to ldap server
        $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

        // verify binding
        if ($ldapbind)
        {
            echo "LDAP bind successful...";


            return true;
        } else {
            echo "LDAP bind failed...";
        }
    }

}




















    /*
    //var_dump($user);exit();
   // if (empty($user) || empty($password)) return false;


// using ldap bind
    $ldaprdn = 'cn=alumne1,ou=users,ou=daw2,dc=daw2grup5,dc=com';     // ldap rdn or dn
    $ldappass = 'thos';  // associated password

// connect to ldap server
    $ldapconn = ldap_connect("192.168.207.11.daw2grup5.com")
    or die("Could not connect to LDAP server.");

    if ($ldapconn) {

        // binding to ldap server
        $ldapbind = ldap_bind($ldapconn, $ldaprdn, $ldappass);

        // verify binding
        if ($ldapbind) {
            echo "LDAP bind successful...";
        } else {
            echo "LDAP bind failed...";
        }

    }

}
    // active directory server
    $ldap_host = "192.168.207.11";
    $ldap = ldap_connect($ldap_host);

    // cn=admin,dc=daw2grup5,dc=com

    var_dump($user,$password);

    // active directory DN (base location of ldap search)
    $ldap_dn = "OU=admin,DC=daw2grup5,DC=com";

    // active directory user group name
    $ldap_user_group = "daw2grup5";


    // active directory manager group name
    $ldap_manager_group = "admin";

    // domain, for purposes of constructing $user
    $ldap_usr_dom = '@daw2grup5.com';
    // connect to active directory




    // configure ldap params
    ldap_set_option($ldap, LDAP_OPT_PROTOCOL_VERSION, 3);
    ldap_set_option($ldap, LDAP_OPT_REFERRALS, 0);

    // verify user and password
    if ($bind = @ldap_bind($ldap, $user . $ldap_usr_dom, $password)) {
        // valid
        // check presence in groups
        $filter = "(sAMAccountName=" . $user . ")";
        $attr = array("memberof");
        $result = ldap_search($ldap, $ldap_dn, $filter, $attr) or exit("Unable to search LDAP server");
        $entries = ldap_get_entries($ldap, $result);
        ldap_unbind($ldap);

        // check groups
        $access = 0;
        foreach ($entries[0]['memberof'] as $grps) {
            // is manager, break loop
            if (strpos($grps, $ldap_manager_group)) {
                $access = 2;
                break;
            }

            // is user

            if (strpos($grps, $ldap_user_group)) $access = 1;
        }

        if ($access != 0) {
            // establish session variables
            $_SESSION['user'] = $user;
            $_SESSION['access'] = $access;

            return true;
        } else {
            // user has no rights
            return false;
        }

    } else {
        // invalid name or password
        return false;
    }
}
    */
?>