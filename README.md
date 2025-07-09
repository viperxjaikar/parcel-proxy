# 🛡️ Phishing URL Detector AI

An AI-powered phishing URL detection tool that combines machine learning with real-time security checks to protect users from malicious websites.

## 🚀 Features
- ⚡ ML model trained on phishing & legitimate URLs  
- 🔒 Real-time Google Safe Browsing API integration  
- 📊 Logs all predictions with user feedback  
- 🌓 Beautiful responsive web UI with dark mode  
- 🚨 Instant predictions with feedback options  

## 🛠️ Tech Stack
- **Frontend**: HTML, CSS (custom styling, dark UI)  
- **Backend**: Python, Flask  
- **AI/ML**: scikit-learn, pandas, tldextract  
- **Security**: Google Safe Browsing API  
- **Logging**: CSV file with all user feedback  

## � How to Run Locally

```bash
# 1️⃣ Clone the repository
git clone https://github.com/yourusername/phishing-url-detector.git
cd phishing-url-detector

# 2️⃣ Install dependencies
pip install -r requirements.txt

# 3️⃣ Configure API keys
→ Edit config.py with your Google Safe Browsing API key

# 4️⃣ Start the Flask server
python app.py
