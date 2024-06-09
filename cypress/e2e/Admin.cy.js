describe('Admin Flight Schedule Tests', () => {

  beforeEach(() => {
    // Login as Admin before running the tests
     cy.visit('http://localhost/airline-ticket-reservation/login_page.php');
     cy.get('input[name="username"]').type('admin');
     cy.get('input[name="password"]').type('passpass');
     cy.get('input[type="submit"]').click();
     cy.visit('http://localhost/airline-ticket-reservation/admin_homepage.php');
     cy.url().should('include', 'admin_homepage.php');
  });

  it('should navigate to Add Flight Schedule Details page', () => {
    // Ensure the page is fully loaded
    cy.wait(2000);

    // Navigate to Add Flight Schedule Details page
    cy.get('a').contains('Add Flight Schedule Details').click({force: true});
    cy.url().should('include', 'add_flight_details.php');
  });

  it('should fill out and submit flight schedule details form', () => {
    // Navigate to Add Flight Schedule Details page
    cy.get('a').contains('Add Flight Schedule Details').click();
    cy.url().should('include', 'add_flight_details.php');

    // Fill out flight schedule details form
    cy.get('input[name="flight_no"]').type('AA1214');
    cy.get('input[name="origin"]').type('Berlin');
    cy.get('input[name="destination"]').type('Barcelona');
    cy.get('input[name="dep_date"]').type('2024-08-09');
    cy.get('input[name="arr_date"]').type('2024-08-09');
    cy.get('input[name="dep_time"]').type('21:00');
    cy.get('input[name="arr_time"]').type('23:00');
    cy.get('input[name="seats_eco"]').type('200');
    cy.get('input[name="seats_bus"]').type('75');
    cy.get('input[name="price_eco"]').type('50');
    cy.get('input[name="price_bus"]').type('150');
    cy.get('input[name="jet_id"]').type('10002');

    // Submit the form
    cy.get('input[type="submit"]').contains('Submit').click();

    // Verify successful submission message
    cy.contains('The Flight Schedule has been successfully added.').should('be.visible');
  });

  
  it('should navigate to Delete Flight Schedule Details page', () => {
    // Ensure the page is fully loaded
    cy.wait(2000);

    // Navigate to Delete Flight Schedule Details page
    cy.get('a').contains('Delete Flight Schedule Details').click({force: true});
    cy.url().should('include', 'delete_flight_details.php');
  });

  it('should fill out and submit delete flight schedule details form', () => {
    // Ensure the page is fully loaded
    cy.wait(2000);

    // Navigate to Delete Flight Schedule Details page
    cy.get('a').contains('Delete Flight Schedule Details').click({force: true});
    cy.url().should('include', 'delete_flight_details.php');

    // Fill out delete flight schedule details form
    cy.get('input[name="flight_no"]').type('AA1214');
    cy.get('input[name="departure_date"]').type('2024-08-09');

    // Submit the form
    cy.get('input[type="submit"]').contains('Delete').click();

    // Verify successful deletion message
    cy.url().should('include', 'delete_flight_details.php?msg=success');
    cy.contains('The Flight Schedule has been successfully deleted.').should('be.visible');
  });

  it('should fill out and submit activate aircraft form', () => {
    // Ensure the page is fully loaded
    cy.wait(2000);

    // Navigate to Activate Aircraft page
    cy.get('a').contains('Activate Aircraft').click({force: true});

    // Fill out activate aircraft form
    cy.get('input[name="jet_id"]').type('10001');

    // Submit the form
    cy.get('input[type="submit"]').contains('Activate').click();

  });

  it('should fill out and submit Deactivate aircraft form', () => {
    // Ensure the page is fully loaded
    cy.wait(2000);

    // Navigate to Activate Aircraft page
    cy.get('a').contains('Deactivate Aircraft').click({force: true});

    // Fill out activate aircraft form
    cy.get('input[name="jet_id"]').type('10001');

    // Submit the form
    cy.get('input[type="submit"]').contains('Deactivate').click();

    // Verify successful activation message
    cy.url().should('include', 'deactivate_jet_details.php?msg=success');
  });


  it('should fill out and submit add aircraft form', () => {
    // Ensure the page is fully loaded
    cy.wait(2000);

    // Navigate to Add Aircraft Details page
    cy.get('a').contains('Add Aircrafts Details').click({force: true});
    cy.url().should('include', 'add_jet_details.php');

    // Fill out add aircraft form
    cy.get('input[name="jet_id"]').type('12021');
    cy.get('input[name="jet_type"]').type('Boeing 737');
    cy.get('input[name="jet_capacity"]').type('150');

    // Submit the form
    cy.get('input[type="submit"]').contains('Submit').click();

    // Verify successful addition message
    cy.contains('The Aircraft has been successfully added.').should('be.visible');
  });
});
