using System;

namespace CKUT.Core.Services.Ch8._8._2._2
{
    public class LogAnalyzerInit
    {
        private bool initialized = false;

        public bool IsValid(string fileName)
        {
            if (!initialized)
            {
                throw new Exception("no initialize");
            }
            if (fileName.Length < 8)
            {
                return true;
            }

            return false;
        }

        public void Initialize()
        {
            initialized = true;
        }
    }
}