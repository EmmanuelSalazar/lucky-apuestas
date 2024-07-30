const mp = new MercadoPago('TEST-81fd65a5-0dc0-484f-a09e-23238b683404', {
    locale: 'es-CO'
  });
  mp.bricks().create("wallet", "wallet_container", {
    initialization: {
        preferenceId: preference,
    },
  });