📦 Parcel Proxy
A fast, lightweight proxy server for Parcel-based web projects.
This tool helps you develop and test Parcel apps with custom proxy rules, API routing, and local server configuration.

🚀 Features
⚡ Blazing fast proxy for Parcel bundler

🔀 Customizable proxy routes for API calls

🌐 Seamless local development with CORS handling

🛠️ Easy to configure and extend

🔒 Optional HTTPS support for secure local dev

📦 Tech Stack
Bundler: Parcel
Server: Node.js, Express (or native HTTP if you wrote your own)
Config: JSON/YAML or JS-based config
Proxy: http-proxy-middleware (or your custom logic)

🧪 How to Run Locally
bash
Copy
Edit
# 1️⃣ Clone the repository
git clone https://github.com/viperxjaikar/parcel-proxy.git
cd parcel-proxy

# 2️⃣ Install dependencies
npm install

# 3️⃣ Configure your proxy rules
# → Edit proxy.config.js (or .json) as needed

# 4️⃣ Start the proxy server
npm run start
⚙️ Example Proxy Rule
js
Copy
Edit
// proxy.config.js
module.exports = {
  "/api": {
    target: "http://localhost:5000",
    changeOrigin: true,# 📦 Parcel Proxy

A lightweight proxy server project using Node.js and Parcel for fast static asset delivery and local development.

---

## 🚀 Features

* ⚡ Simple HTTP proxy server setup
* 🔄 Automatic asset bundling with Parcel
* 🗂️ Serves static files efficiently
* 🔌 Easy configuration for local or staging use

---

## 📦 Tech Stack

* **Backend**: Node.js, Express.js
* **Bundler**: Parcel
* **Other**: HTTP Proxy Middleware

---

## 🧪 How to Run Locally

```bash
# 1. Clone the repository
git clone https://github.com/viperxjaikar/parcel-proxy.git
cd parcel-proxy

# 2. Install dependencies
npm install

# 3. Start the proxy server
npm run start
```

---

## 📄 License

MIT License

    secure: false
  },
  "/auth": {
    target: "http://localhost:4000",
    pathRewrite: { "^/auth": "" }
  }
};
✅ About
Parcel Proxy helps developers route API requests during local development without dealing with CORS or server reconfiguration.

📜 License
MIT — free to use and modify.
