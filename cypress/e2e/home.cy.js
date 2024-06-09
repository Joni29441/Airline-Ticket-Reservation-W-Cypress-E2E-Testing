describe('Turkish Airlines Home Page Tests', () => {

  beforeEach(() => {
    cy.visit('http://localhost/airline-ticket-reservation/home_page.php'); // replace with your actual path
  });

  describe('Navigation Tests', () => {
    it('should navigate to Home page', () => {
      cy.get('a.nav-link').contains('Home').click();
      cy.url().should('include', 'home_page.php');
    });

    it('should navigate to Book Tickets page based on user type', () => {
      // Check for non-logged-in user
      cy.visit('http://localhost/airline-ticket-reservation/home_page.php');
      cy.get('a.nav-link').contains('Book Tickets').click();
      cy.url().should('include', 'login_page.php');

      // Simulate Customer login
      cy.visit('http://localhost/airline-ticket-reservation/login_page.php');
      cy.get('input[name="username"]').type('username');
      cy.get('input[name="password"]').type('usernamepass');
      cy.get('input[type="submit"]').click();
      cy.visit('http://localhost/airline-ticket-reservation/customer_homepage.php');
      cy.get('a.nav-link').contains('Book Flight Tickets').click();

      // Simulate Administrator login
      cy.visit('http://localhost/airline-ticket-reservation/login_page.php');
      cy.get('input[name="username"]').type('admin');
      cy.get('input[name="password"]').type('passpass');
      cy.get('input[type="submit"]').click();
      cy.visit('http://localhost/airline-ticket-reservation/admin_homepage.php');
      cy.url().should('include', 'admin_homepage.php');
    });

    it('should navigate to About Us page', () => {
      cy.get('a.nav-link').contains('About Us').click();
      cy.url().should('include', 'home_page.php');
    });

    it('should navigate to Check PNR page', () => {
      cy.get('a.nav-link').contains('Check PNR').click();
      cy.url().should('include', 'pnrall.php');
    });

    it('should navigate to Login page', () => {
      cy.get('a.nav-link').contains('Login').click();
      cy.url().should('include', 'login_page.php');
    });

    it('should display services correctly', () => {
      cy.get('.pricing-header').should('contain', 'Services');
      cy.get('.card').should('have.length', 4);
    });

    it('should display destinations carousel correctly', () => {
      cy.get('.carousel').should('exist');
      cy.get('.carousel-inner .carousel-item').should('have.length.at.least', 3);
    });
  });

});

describe('Login Functionality Tests', () => {

  beforeEach(() => {
    cy.visit('http://localhost/airline-ticket-reservation/login_page.php'); 
  });

  it('should login as Customer', () => {
    cy.get('input[name="username"]').type('customer_username');
    cy.get('input[name="password"]').type('customer_password');
    cy.get('input[type="submit"]').click();
  });

  it('should login as Administrator', () => {
    cy.get('input[name="username"]').type('admin_username');
    cy.get('input[name="password"]').type('admin_password');
    cy.get('input[type="submit"]').click();
  });

  it('should show error on invalid login', () => {
    cy.get('input[name="username"]').type('invalid_username');
    cy.get('input[name="password"]').type('invalid_password');
    cy.get('input[type="submit"]').click();
    cy.url().should('include', 'login_page.php?msg=failed');
    cy.get('.card-body').should('contain', 'Invalid Username/Password');
  });

});
