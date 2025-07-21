# TranslateX

**Unlimited, high-quality machine translation for apps, websites, and services at a fraction of the cost of Google Translate and DeepL.**

https://translatex.com

---

## Why TranslateX?

TranslateX offers unlimited, production-grade neural translation at a price that crushes the competition. Compare with Google Translate and DeepL:

| Provider            | Price per 1,000,000 chars | Quality (EN→ES, COMET) | Human evaluation (EN→ES) |
|---------------------|---------------------------|------------------------|--------------------------|
| **TranslateX Free** | Free                      | 0.8485                 | 93.87                    |
| **TranslateX**      | ~$19.99/month (unlimited) | 0.8670                 | 96.33                    |
| DeepL               | €20 (~$21.50)             | 0.8700                 | 96.5                     |
| Google Translate    | $20                       | 0.8745                 | 97.27                    |

> **With TranslateX, you get unlimited translations for less than the price of translating just one million characters with Google Translate or DeepL.**

## 🔧 Features

- **Unlimited translations** without usage caps  
- Supports **35+ languages**, including English, Arabic, Bulgarian, Bengali, Czech, Danish, German, Greek, Spanish, Finnish, French, Hindi, Croatian, Hungarian, Indonesian, Italian, Hebrew, Japanese, Korean, Lithuanian, Dutch, Norwegian, Polish, Portuguese, Romanian, Russian, Slovak, Slovenian, Swedish, Thai, Turkish, Ukrainian, Vietnamese, Chinese (Simplified), Chinese (Traditional)
- Two neural models:
  - *Small*: quality score ~7.9/10
  - *Large*: quality score ~8.3/10 (vs. ~8.5/10 for human translation)  
- Multiple subscription tiers:
  - **Free**: Small model, CPU hosting, 50 API calls/min, unlimited translations (no commercial use / no privacy mode)  
  - **Startup** (~$19.99/mo): Large model, GPU hosting, 50 API calls/min, commercial use, privacy mode  
  - **Business** (~$29.99/mo): Large model, GPU hosting, 75 API calls/min, full features  
  - **Enterprise** (~$39.99/mo): Large model, GPU hosting, 100 API calls/min, full features

## 📊 Quality Evaluation

**Translation quality is measured using the [Alconost.MT Evaluation Tool](https://alconost.mt/evaluate).**

#### Scoring System  

- **91-100 — Publish-Ready:**  
  Ready for use with minimal or no edits.
- **70-90  — Acceptable:**  
  Generally accurate and fluent; meaning is preserved. Requires human review and correction before use.
- **50-69  — Fair:**  
  Understandable but contains noticeable issues. Requires significant human review and correction. Use with caution.
- **1-49   — Unusable:**  
  Difficult to understand or use reliably. Re-generate or assign for full human translation.

---
### MT systems compared
Google Translate vs DeepL vs TranslateX Free vs TranslateX Paid

#### Evaluation Details

- **Tested using:** FLORES PLUS DEVTEST 1-100  
- **Quality estimation tools:** BLEU, SacreBLEU, and COMET ([Unbabel/wmt22-cometkiwi-da](https://huggingface.co/Unbabel/wmt22-cometkiwi-da))

**Date:** 7/1/2025

#### Results (EN → ES)

| System                 | NLTK BLEU | SacreBLEU | COMET        | OpenAI GPT-4.1 | Claude 4 Sonnet |
|------------------------|-----------|-----------|--------------|----------------|-----------------|
| TranslateX Free        | 28.02     | 28.26     | 0.8485       | 92             | 85              |
| TranslateX Paid        | 28.72     | 28.93     | 0.8670       | 97             | 94              |
| DeepL                  | 27.28     | 27.28     | 0.8700       | 98             | 94              |
| Google Translate       | 27.66     | 27.92     | 0.8745       | 97             | 95              |

---

### OpenAI GPT-4.1 Results

| File                       | Evaluation Link                                                                        | Score  |
|----------------------------|----------------------------------------------------------------------------------------|--------|
| tx_paid_en-es-1-30.csv     | [View](https://alconost.mt/evaluate/e9e5d1e9-a064-4dbc-9563-eab0a1ef18b2)             | 97/100 |
| tx_free_en-es-1-30.csv     | [View](https://alconost.mt/evaluate/2fb46b5f-3335-48a7-9ada-0209d73e1203)             | 92/100 |
| deepl_en-es-1-30.csv       | [View](https://alconost.mt/evaluate/2ca42db5-de17-4202-9f5e-1d0a775a2de9)             | 98/100 |
| gt_en-es-1-30.csv          | [View](https://alconost.mt/evaluate/0850ffb7-17c6-44e3-b48b-8f77e998b4dc)             | 97/100 |
| ref_en-es-1-27.csv         | [View](https://alconost.mt/evaluate/8131f46b-1bea-45f2-8ab0-593eff124f8f)             | 95/100 |

---

### Claude 4 Sonnet Results

| File                       | Evaluation Link                                                                        | Score  |
|----------------------------|----------------------------------------------------------------------------------------|--------|
| tx_paid_en-es-1-30.csv     | [View](https://alconost.mt/evaluate/c6c3da9e-62ba-4fc7-923e-e9d71119e620)             | 94/100 |
| tx_free_en-es-1-30.csv     | [View](https://alconost.mt/evaluate/695581a0-7511-4be8-bc21-93d2ba6e5dbd)             | 85/100 |
| deepl_en-es-1-30.csv       | [View](https://alconost.mt/evaluate/71570330-4bff-412d-9ad6-fd02ca3c3099)             | 94/100 |
| gt_en-es-1-30.csv          | [View](https://alconost.mt/evaluate/dc96d64a-f725-4931-916e-59641bd2c31e)             | 95/100 |
| ref_en-es-1-27.csv         | [View](https://alconost.mt/evaluate/32f28085-531d-4e74-a4e6-5d501d7afc62)             | 86/100 |

---

## 🏆 Detailed Human Evaluation

**Date** 7/21/2025

The translations were evaluated by Marie Ovesyan (Machine Translation Specialist), using a **blind review** process. The evaluator did not know which system generated the translations, ensuring unbiased human judgment.

| System           | Score | 1-49 Unusable | 50-69 Fair | 70-90 Acceptable | 91-100 Publish-Ready |
|------------------|-------|---------------|------------|------------------|----------------------|
| Google Translate | 97.27 | 0             | 0          | 1                | 29                   |
| TranslateX Paid  | 96.33 | 0             | 0          | 2                | 28                   |
| DeepL            | 96.5  | 0             | 0          | 3                | 27                   |
| Reference        | 99.73 | 0             | 0          | 0                | 30                   |
| TranslateX Free  | 93.87 | 0             | 0          | 7                | 23                   |

> **View detailed human evaluation results with comments and corrected translations:**  
[Blind Human Evaluation of TranslateX Paid, TranslateX Free, Google Translate, DeepL, Reference - English to Spanish July 2025.xlsx](https://github.com/edo888/translatex/raw/refs/heads/main/quality%20evaluation/Blind%20Human%20Evaluation%20of%20TranslateX%20Paid,%20TranslateX%20Free,%20Google%20Translate,%20DeepL,%20Reference%20-%20English%20to%20Spanish%20July%202025.xlsx)

---

## Summary & Conclusion

- **TranslateX delivers on-par translation quality with Google Translate and DeepL.**
- **You pay just one monthly price for unlimited characters** while Google Translate and DeepL charge $20+ for each million characters.
- **Perfect for startups, SaaS, websites, and large-scale apps.**

**Switch to TranslateX and start saving without sacrificing quality.**

---