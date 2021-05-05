using System;
using System.Runtime.CompilerServices;
[assembly: InternalsVisibleTo("CKUT.UnitTests")]

namespace CKUT.Core.Services.Ch3.No7
{
    public class LogAnalyzer
    {
        private IFileExtensionManager _fileExtensionManager;

        internal LogAnalyzer()
        {
            _fileExtensionManager = ExtensionManagerFactory.Create();
        }

        public bool IsValidFileName(string fileName)
        {
            try
            {
                return _fileExtensionManager.IsValid(fileName);
            }
            catch (Exception e)
            {
                return false;
            }
        }
    }
}
