describe('Flight Booking Tests', () => {

  beforeEach(() => {
    // Login before running the tests
    cy.visit('http://localhost/airline-ticket-reservation/login_page.php'); 
    cy.get('input[name="username"]').type('username'); 
    cy.get('input[name="password"]').type('usernamepass'); 
    cy.get('input[type="submit"]').click();
    cy.url().should('include', 'customer_homepage.php');
  });

  it('should navigate to Book Flight Tickets page', () => {
    // Navigate to Book Flight Tickets page
    cy.get('a.nav-link').contains('Book Flight Tickets').click();
    cy.url().should('include', 'book_tickets.php');
  });

  it('should fill out and submit flight booking form', () => {
    // Navigate to book flight tickets page
    cy.get('a.nav-link').contains('Book Flight Tickets').click();
    cy.url().should('include', 'book_tickets.php');

    // Fill out flight booking form
    cy.get('input[name="origin"]').type('Berlin');
    cy.get('input[name="destination"]').type('Barcelona');
    cy.get('input[name="dep_date"]').type('2024-08-09');
    cy.get('input[name="no_of_pass"]').type('1');
    cy.get('select[name="class"]').select('economy');

    // Submit the form
    cy.get('input[type="submit"]').contains('Search for Available Flights').click();

    // Verify search results page
    cy.url().should('include', 'view_flights_form_handler.php');
    cy.get('h2').should('contain', 'Available Flights');
    cy.get('table').should('exist');
    cy.get('tbody tr').should('have.length.greaterThan', 0);
  });

  it('should select a flight from available flights', () => {
    // Navigate to book flight tickets page
    cy.get('a.nav-link').contains('Book Flight Tickets').click();
    cy.url().should('include', 'book_tickets.php');
    cy.get('input[name="origin"]').type('Berlin');
    cy.get('input[name="destination"]').type('Barcelona');
    cy.get('input[name="dep_date"]').type('2024-08-09');
    cy.get('input[name="no_of_pass"]').type('1');
    cy.get('select[name="class"]').select('economy');
    cy.get('input[type="submit"]').contains('Search for Available Flights').click();
    cy.url().should('include', 'view_flights_form_handler.php');
    cy.get('h2').should('contain', 'Available Flights');
    cy.get('table').should('exist');
    cy.get('tbody tr').should('have.length.greaterThan', 0);

    // Select a flight
    cy.get('input[type="radio"]').first().check(); 
    cy.get('input[type="submit"]').contains('Select Flight').click();

    cy.url().should('include', 'book_tickets2.php');
  });

  it('should enter passenger details and submit', () => {
    // Navigate to book flight tickets page
    cy.get('a.nav-link').contains('Book Flight Tickets').click();
    cy.url().should('include', 'book_tickets.php');
    cy.get('input[name="origin"]').type('Berlin');
    cy.get('input[name="destination"]').type('Barcelona');
    cy.get('input[name="dep_date"]').type('2024-08-09');
    cy.get('input[name="no_of_pass"]').type('1');
    cy.get('select[name="class"]').select('economy');
    cy.get('input[type="submit"]').contains('Search for Available Flights').click();
    cy.url().should('include', 'view_flights_form_handler.php');
    cy.get('h2').should('contain', 'Available Flights');
    cy.get('table').should('exist');
    cy.get('tbody tr').should('have.length.greaterThan', 0);

    // Select a flight
    cy.get('input[type="radio"]').first().check();
    cy.get('input[type="submit"]').contains('Select Flight').click();
    cy.url().should('include', 'book_tickets2.php');

    // Enter passenger details
    cy.get('input[name="pass_name[]"]').type('John Doe');
    cy.get('input[name="pass_age[]"]').type('30');
    cy.get('select[name="pass_gender[]"]').select('male');
    cy.get('select[name="pass_meal[]"]').select('yes');
    cy.get('input[name="pass_ff_id[]"]').type('123456');

    // Enter additional details
    cy.get('input[name="lounge_access"]').check('yes');
    cy.get('input[name="priority_checkin"]').check('yes');
    cy.get('input[name="insurance"]').check('yes');

    // Submit the form
    cy.get('input[type="submit"]').contains('Submit Travel Ticket Details').click();
    cy.url().should('include', 'payment_details.php'); 

    
    // Enter payment details
    cy.get('input[name="payment_mode"][value="credit card"]').check();
    cy.get('input[type="submit"]').contains('Pay Now').click();
    cy.url().should('include', 'ticket_success.php'); 
  });

});
