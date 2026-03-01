# 💳 Multi Payment Gateway

![PHP](https://img.shields.io/badge/PHP-8.x-blue)
![Status](https://img.shields.io/badge/Status-Active-success)
![License](https://img.shields.io/badge/License-MIT-green)

A lightweight and extensible PHP-based multi payment gateway starter project.

---

## 🚀 Supported Providers

- Stripe
- PayPal

---

## 📦 Project Structure

multi-payment/
│
├── index.php
├── .env.example
├── .gitignore
├── README.md
│
├── src/
│   └── PaymentGateway.php
│
└── config/
    └── payment.php

---

## ⚙️ Installation

1. Download or clone the project.
2. Create a `.env` file based on `.env.example`
3. Add your own API credentials.
4. Deploy on any PHP-supported server.

---

## 🔐 Security Notice

This project does NOT include real payment credentials.

Each user must create their own accounts on:

- Stripe
- PayPal

and manually add their API keys.

---

## 📄 License

MIT License
