This project is about a website in which we assign our three friends the job of picking our parcel incase of our unavailability.This is done using SMTP server for mailing.
##contributors
-[Jaikar Ramu](https://github.com/viperxjaikar)
-[Gannoju Abhinav Sushanth](https://github.com/abhinavgannoju)
-[B Koushik](https://github.com/koushik1974)
-[Anuj Mahich](https://github.com/0oAnuj)
-[Suseel Kumar](https://github.com/SuseelKumarG)



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
    changeOrigin: true,
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
