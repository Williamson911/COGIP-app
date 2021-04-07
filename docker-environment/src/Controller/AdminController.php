<?php

declare(strict_types=1);

require_once('./Model/AdminManager.php');
require_once('./Model/ContactManager.php');
require_once('./Model/CompanyManager.php');
require_once('./Model/InvoiceManager.php');

class AdminController
{
    //render function with both $_GET and $_POST vars available if it would be needed.
    public function render()
    {
        global $url;
        $admin= new AdminManager();

        $admin = new AdminManager();

        $contacts = new ContactManager();

        $companies = new CompanyManager();

        $invoices = new InvoiceManager();

        $moderation = new ModerationManager();

        if (isset($_SESSION['username']) && isset($_SESSION['userId']) && isset($_SESSION['role'])) {

            if (isset($_GET['page']) && $_GET['page'] === 'newcontact') {
                $view = './View/newContact.php';

                if (isset($_POST['createNewContact'])) {
                    $newContact = $admin->newContact($_POST['firstname'], $_POST['lastname'], $_POST['company'], $_POST['email']);
                    header('Location: index.php?page=admin');
                }
            } elseif (isset($_GET['page']) && $_GET['page'] === 'newcompany') {
                $view = './View/newCompany.php';

                if (isset($_POST['createNewCompany'])) {
                    $newCompany = $admin->newCompany($_POST['companyName'], $_POST['VATNumber'], $_POST['country'], $_POST['companyType']);
                    header('Location: index.php?page=admin');
                }
            } elseif (isset($_GET['page']) && $_GET['page'] === 'newinvoice') {
                $view = './View/newInvoice.php';

                if (isset($_POST['createNewInvoice'])) {
                    $allInfos = explode(" ", $_POST['contact']);
                    $contactId = $allInfos[0];
                    $companyId = $allInfos[1];

                    $newInvoice = $admin->newInvoice($_POST['invoiceNumber'], $_POST['date'], $contactId, $companyId);
                    header('Location: index.php?page=admin');
                }
            } else {
                $view = './View/error404.php';
            }

            if ($_SESSION['role'] == 'Admin') {
                if (isset($_GET['page']) && $_GET['page'] === 'editcontact') {
                    $view = './View/editContact.php';

                    if (isset($_GET['id'])) {
                        if (ctype_digit($_GET['id'])) {
                            $detailContact = $contacts->getDetails($_GET['id']);

                            if (isset($_POST['editContact'])) {
                                $editContact = $admin->editContact($_GET['id'], $_POST['firstname'], $_POST['lastname'], $_POST['company'], $_POST['email']);
                                header('Location: index.php?page=admin');
                            }
                        } else {
                            $view = './View/error404.php';
                        }
                    }
                } elseif (isset($_GET['page']) && $_GET['page'] === 'editcompany') {
                    $view = './View/editCompany.php';

                    if (isset($_GET['id'])) {
                        if (ctype_digit($_GET['id'])) {
                            $detailCompanies = $companies->getDetails($_GET['id']);

                            if (isset($_POST['editCompany'])) {
                                $editCompany = $admin->editCompany($_GET['id'], $_POST['Name'], $_POST['Country'], $_POST['Type'], $_POST['VATNumber']);
                                header('Location: index.php?page=admin');
                            }
                        } else {
                            $view = './View/error404.php';
                        }
                    }
                } elseif (isset($_GET['page']) && $_GET['page'] === 'editinvoice') {
                    $view = './View/editInvoice.php';

                    if (isset($_GET['id'])) {
                        if (ctype_digit($_GET['id'])) {
                            $detailInvoice = $invoices->getDetails($_GET['id']);

                            if (isset($_POST['editInvoice'])) {
                                $allInfos = explode(" ", $_POST['contact']);
                                $contactId = $allInfos[0];
                                $companyId = $allInfos[1];

                                $editInvoice = $admin->editInvoice($_GET['id'], $_POST['invoiceNumber'], $_POST['date'], $contactId, $companyId);
                                header('Location: index.php?page=admin');
                            }
                        }
                    }
                }

                if (isset($_GET['page']) && $_GET['page'] === 'moderation') {
                    $view = './View/moderation.php';

                    if (isset($_POST['editAdmin'])) {
                        $editAdmin = $moderation->editModo($_POST['Role'], $_POST['id']);
                        header('Location: index.php?page=admin');
                    }
                }
            }
        } else {
            $view = './View/error404.php';
        }

        //load the view
        require $view;
    }
}
