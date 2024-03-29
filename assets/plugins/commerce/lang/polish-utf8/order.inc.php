<?php

setlocale(LC_ALL, 'pl_PL.UTF-8');

return [
    'order.name_field' => 'Imię',
    'order.email_field' => 'Email',
    'order.phone_field' => 'Numer kontaktowy',
    'order.submit_btn' => 'Wyślij zamówienie',
    'order.error.name_required' => 'Wpisz swoje imię',
    'order.error.email_required' => 'Wprowadż email',
    'order.error.email_incorrect' => 'Wprowadż email poprawnie',
    'order.error.phone_required' => 'Wpisz numer kotaktowy',
    'order.success' => '@CODE:<div>Dziękujemy za złożone zamówienie</div>',
    'order.subject' => '@CODE:Nowe zamówienie na stronie [(site_name)]',
    'order.subject_status_changed' => '@CODE:Status zamówienia #[+order.id+] został zmieniony',
    'order.order_paid' => '@CODE:Została wprowadzona wpłata w wartości [+amount+]',
    'order.order_full_paid' => '@CODE:Została wprowadzona wpłata w wartości  [+amount+], zamówienie #[+order.id+] opłacone w całości',
    'order.subject_order_paid' => '@CODE:Zamówienie #[+order.id+] zostało opłacone!',
    'order.status.new' => 'Nowe',
    'order.status.processing' => 'W przetworzeniu',
    'order.status.paid' => 'Opłacone',
    'order.status.shipped' => 'Dostarczone',
    'order.status.canceled' => 'Odwołane',
    'order.status.complete' => 'Skończone',
    'order.status.pending' => 'Oczekiwanie',
    'order.status_title' => 'Status',
    'order.amount_title' => 'Suma',
    'order.delivery_title' => 'Rodzaje dostawy',
    'order.payment_title' => 'Rodzaje płatności',
    'order.contact_group_title' => 'Dane kupującego',
    'order.payment_delivery_group_title' => 'Rodzaj płatności i dostawy',
    'order.to_pay_title' => 'Do zapłaty',
    'order.order_info' => 'Szczegóły zamówienia',
    'order.order_id' => 'Numer zamówienia',
    'order.created_at' => 'Data i czas złożenia',
    'order.redirecting_to_payment' => 'Przekierowanie do płatności...',
    'order.order_payment_link' => '@CODE:<p>Kliknuj tutaj aby zapłacić <a href="[+link+]">[+link+]</a></p>',
    'order.order_data_changed' => '@CODE:Dane zamówienia #[+order.id+] zostałe zmienione!',
    'order.order_cancelled' => 'Zamøwienie zostało odwołane!',
];
