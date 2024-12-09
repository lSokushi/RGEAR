#!/bin/bash
echo "Escolha o tipo de commit:"
echo "1 - ✨ Feat"
echo "2 - 🐛 Fix"
echo "3 - 📝 Docs"
echo "4 - 🔧 Chore"

read tipo

case $tipo in
  1) emoji="✨ Feat:" ;;
  2) emoji="🐛 Fix:" ;;
  3) emoji="📝 Docs:" ;;
  4) emoji="🔧 Chore:" ;;
  *) echo "Tipo inválido"; exit 1 ;;
esac

echo "Digite a mensagem do commit:"
read mensagem

git commit -m "$emoji $mensagem"
