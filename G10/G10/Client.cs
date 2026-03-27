using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace G10
{
    internal class Client
    {
        public string Nom { get; set; }
        public string Prenom { get; set; }

        public string StringTXT
        {
            get { return $"{Prenom}-{Nom}"; }
        }

        public string StringCSV
        {
            get { return $"{Prenom};{Nom}"; }
        }

        public override string ToString()
        {
            return $"{Prenom} {Nom}";
        }
    }
}
